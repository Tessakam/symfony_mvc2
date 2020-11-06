<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LearningController extends AbstractController
{

    public function index(): Response
    {
        $name = new showMyName();
        return $this->render('learning/index.html.twig', [
            'controller_name' => 'LearningController',
            'name' => $name->getName(),
        ]);
    }

    public function changeMyName()
    {
        $name = new showMyName();
        return $this->render('learning/index.html.twig', [
            'name' => $name->getName(),
        ]);
    }

    public function aboutMe()
    {
        return 'ome lorum ipsum tex';
    }


}
