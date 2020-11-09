<?php

namespace App\Controller;
// link classes with each other

use App\Entity\showMyName;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Form\Forms;

// import this specific route in this specific namespace
// RFC 3 / RFC 16 --> link to agreement = conformity

class LearningController extends AbstractController
{
    /**
     * @Route("/learning", name="learning")
     */

    public function index(): Response
    {
        return $this->render('learning/index.html.twig', [
            'controller_name' => 'LearningController',
        ]);
    }

    /**
     * @Route("/changeMyName", name="changeMyName")
     */
    public function changeMyName()
    {
        $name = new showMyName();
        return $this->render('learning/changeMyName.html.twig', [
            'name' => $name->getName(),
        ]);
    }

    /**
     * @Route("/aboutMe", name="aboutMe")
     */
    public function aboutMe()
    {
        return 'ome lorum ipsum tex';
    }
}
