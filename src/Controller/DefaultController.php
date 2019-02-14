<?php

namespace App\Controller;

use App\Entity\Categorie;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class DefaultController extends AbstractController
{
    public function index(SessionInterface $session)
    {
    	$results = array();
    	$repository = $this->getDoctrine()->getRepository(Categorie::class);

    	foreach ($repository->findAll() as $object) {
    		$results[] = $object->getName();
    	}
        return $this->render('default/index.html.twig', [
            "welcome" => true,
            "session" => $session->get("connected"),
            "username" => $session->get("username"),
            "id" => $session->get("id"),
            "categories" => $results
        ]);
    }
}
