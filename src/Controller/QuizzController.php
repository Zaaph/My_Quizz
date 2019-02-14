<?php

namespace App\Controller;

use App\Entity\Reponse;
use App\Entity\Categorie;
use App\Entity\Question;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Request;

class QuizzController extends AbstractController
{
    /**
     * @Route("/quizz", name="quizz")
     */
    public function index(SessionInterface $session, Request $request)
    {   
        if ($session->get("count") === NULL) {
            $session->set("count", 0);
        }
        if ($request->query->get("r") === "1") {
            $session->set("count", $session->get("count") + 1);
        }

    	$cat_id = $request->query->get("id");
        $question_number = $request->query->get("question");

    	$results = array();
    	$repository = $this->getDoctrine()->getRepository(Categorie::class);

    	foreach ($repository->findAll() as $object) {
    		$results[] = $object->getName();
    	}

    	if ($cat_id === NULL || $cat_id === "0" ||
            $question_number === NULL || $question_number === "0") {
    		return $this->render('default/index.html.twig', [
	        	"welcome" => false,
	            "session" => $session->get("connected"),
	            "username" => $session->get("username"),
	            "id" => $session->get("id"),
	            "categories" => $results
        	]);
    	}

        $repository = $this->getDoctrine()->getRepository(Question::class);
        $questions = $this->findBy($repository, "question",
            ["id_categorie" => $cat_id]);
        $questions_ids = $this->findBy($repository, "id", 
            ["id_categorie" => $cat_id]);
        if ($question_number < count($questions) + 1) {
            $question_id = $questions_ids[$question_number - 1];
        } elseif ($question_number == count($questions) + 1) {
            $question_id = "end";
        } else {
            $question_id = false;
        }

        if ($question_id && $question_id !== "end") {
            $answers = array();
            $repository = $this->getDoctrine()->getRepository(Reponse::class);
            $names = $this->findBy($repository, "reponse",
                ["id_question" => $question_id]);
            $expected = $this->findBy($repository, "reponseExpected",
                ["id_question" => $question_id]);
            foreach ($names as $key => $value) {
                $answers[] = array("reponse" => $value,
                    "expected" => $expected[$key]);
            }
            shuffle($answers);
        } elseif ($question_id !== "end") {
            return $this->render("quizz/error.html.twig", [
                "quizzname" => $results[$cat_id - 1],
                "session" => $session->get("connected"),
                "username" => $session->get("username"),
                "id" => $session->get("id")
            ]);
        } else {
            $score = $session->get("count");
            $session->set("count", 0);
            return $this->render("quizz/end.html.twig", [
                "total_questions" => count($questions),
                "quizzname" => $results[$cat_id - 1],
                "session" => $session->get("connected"),
                "username" => $session->get("username"),
                "id" => $session->get("id"),
                "score" => $score
            ]);
        }
        


    	return $this->render("quizz/quizz.html.twig", [
    		"quizzname" => $results[$cat_id - 1],
    		"session" => $session->get("connected"),
	        "username" => $session->get("username"),
	        "id" => $session->get("id"),
            "question_number" => $question_number,
            "question_text" => $questions[$question_number - 1],
            "answers" => $answers,
            "cat_id" => $cat_id
    	]);

    }

    public function findBy($repository, string $field, array $search) {
        $func = "get" . ucfirst($field);
    	$result = array();
    	$key = key($search);
    	$value = $search[$key];
    	foreach ($repository->findBy([$key => $value]) as
    		$key => $value) {
    		$result[] = $value->{$func}();
    	}
    	return $result;
    }

    
}
