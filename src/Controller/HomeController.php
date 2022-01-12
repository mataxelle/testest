<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    public function index(UserRepository $userRepository): Response
    {
        $users = $userRepository->findAll();
        
        return $this->render('home/index.html.twig', [
            'users' => $users,
        ]);
    }
}
