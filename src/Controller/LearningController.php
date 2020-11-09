<?php

namespace App\Controller;
// link classes with each other

use App\Entity\showMyName;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;
// import this specific route in this specific namespace
// RFC 3 / RFC 16 --> link to agreement = conformity

class LearningController extends AbstractController
{
    /**
     * @Route("/about-me", name="learning")
     */

    public function index()
    {
        $name = new showMyName();
        return $this->render('learning/index.html.twig', [
            'controller_name' => 'LearningController',
            'name' => $name->getName(),
        ]);
    }

    /**
     * @Route("/change-my-name", name="changeName")
     */
    public function changeMyName()
    {
        $name = new showMyName();
        return $this->render('learning/changeMyName.html.twig', [
            'name' => $name->getName(),
        ]);
    }

    public function aboutMe()
    {
        return 'ome lorum ipsum tex';
    }


}
