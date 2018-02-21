<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Project;
use App\Entity\Technology;
use App\Entity\Image;

class ProjectController extends Controller
{
    /**
     * @Route("/project", name="project")
     */
    public function index()
    {
        $projet = new Project();
        $projet->setTitre('Films');
        $projet->setDescription("sedrtfyghunjk,dretfgyhjnk,ldfrtgyhujiko");

        $techno = new Technology();
        $techno1 = new Technology();
        $techno1->setName('PHP');
        $techno->setName('HTML');

        $em = $this->getDoctrine()->getManager();
        $em->persist($projet);
        $em->persist($techno);
        $em->persist($techno1);
        $em->flush();

        return $this->render('portfolio/home.html.twig', [
          'project' =>$projet
        ]);
    }

}
