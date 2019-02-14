<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class RegisterController extends AbstractController
{
	/**
     * @Route("/register", name="register")
     */
    public function index(Request $request, SessionInterface $session)
    {
    	$user = new User();
    	$error = false;
    	$form = $this->createFormBuilder()
            ->add('username', TextType::class)
            ->add('email', TextType::class)
            ->add("password", PasswordType::class)
            ->add('Register', SubmitType::class)
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
         	foreach ($form->getData() as $key => $value) {
         		$func = "set" . ucfirst($key);
         		if ($key === "password") {
         			$user->{$func}(password_hash($value, PASSWORD_BCRYPT));
         		} else {
         			$user->{$func}($value);
         		}
         	}
         	if (preg_match("/.+@.+\..+/", $user->getEmail())) {
         		$repository = $this->getDoctrine()->getRepository(User::class);
         		$user_check = $repository->findOneBy(["email" => $user->getEmail()]);
         		if ($user_check === NULL) {
			        $session->set("connected", true);
			        $session->set("username", $user->getUsername());
		         	$entityManager = $this->getDoctrine()->getManager();
		        	$entityManager->persist($user);
		        	$entityManager->flush();
			        $session->set("id", $user->getId());
		        	return $this->render("register/success.html.twig",
		        		[
		        			"error" => false,
		        			"username" => $user->getUsername(),
		        			"session" => $session->get("connected"),
		        			"id" => $session->get("id")
		        		]);
		        } else {
		        	$error = "taken";
		        }
	        } else {
	        	$error = "mail";
	        }
        }
        return $this->render('register/index.html.twig', [
            "error" => $error,
            "form" => $form->createView(),
          	"session" => $session->get("connected"),
          	"id" => $session->get("id")
        ]);
    }
}
