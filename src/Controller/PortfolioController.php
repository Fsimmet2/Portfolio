<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class PortfolioController extends Controller
{
    /**
     * @Route("/portfolio", name="portfolio")
     */
    public function index()
    {
        // replace this line with your own code!
        return $this->render('portfolio/home.html.twig');
    }

    /**
     * @Route("/insert", name="insert")
     */
     public function insert(){

       return $this->render('portfolio/insert.html.twig');
     }

     /**
      * @Route("/accueil", name="accueil")
      */
      public function accueil(){

        return $this->render('portfolio/portfolio.html.twig');
      }
}
