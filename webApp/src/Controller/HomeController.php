<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function success () {

      //me traigo los games on game
      //me traigo el marcador de cada j


      return $this->render('home.html.twig');
    }

    #[Route('/dashboar_user', name: 'dashboard_user')]
    public function dashboarUser () {
       return $this->render('dashboardUser.html.twig');
    }
    
    #[Route('/dashboar_admin', name: 'dashboard_admin')]
    public function dashboarAdmin () {
       return $this->render('dashboardAdmin.html.twig');
    }

}