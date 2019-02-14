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

class LoginController extends AbstractController
{
    /**
     * @Route("/login", name="login")
     */
    public function index(Request $request, SessionInterface $session)
    {
    	$user = new User();
    	$form = $this->createFormBuilder()
            ->add('email', TextType::class)
            ->add("password", PasswordType::class)
            ->add('Login', SubmitType::class)
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
         	$data = $form->getData();
	    	$repository = $this->getDoctrine()->getRepository(User::class);
	    	$user = $repository->findOneBy(["email" => $data["email"]]);
	    	if ($user !== NULL && 
	    		password_verify($data["password"], $user->getPassword())) {
	        	$session->set("connected", true);
	        	$session->set("username", $user->getUsername());
	   			$session->set("id", $user->getId());
	   			$session->set("admin", $user->getAdmin());
        		return $this->redirectToRoute("index");
        	} else {
        		return $this->render("login/index.html.twig", 
        			[
        				"error" => true,
        				"session" => $session->get("connected"),
        				"id" => $session->get("id"),
        				"form" => $form->createView()
        			]);
        	}
        }
        return $this->render("login/index.html.twig", 
    	[
    		"error" => false,
    		"session" => $session->get("connected"),
        	"id" => $session->get("id"),
        	"form" => $form->createView()
    	]);
    }
    /**
     * @Route("/logout", name="logout")
     */
    public function logout(SessionInterface $session)
    {
    	$session->set("connected", false);
    	$session->set("id", 0);
    	return $this->redirectToRoute("index");
    }
}
