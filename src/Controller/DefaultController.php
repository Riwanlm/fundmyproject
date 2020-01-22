<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Project;
use App\Form\ProjectType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        //Rechercher les données en base de données
        $projects = $this->getDoctrine()->getRepository(Project::class)->findAll();
        $categories = $this->getDoctrine()->getRepository(Category::class)->findAll();


        return $this->render('default/index.html.twig', [
            'projects' => $projects,
            'categories' => $categories
        ]);
    }

    public function headerCategories()
    {
        $categories = $this->getDoctrine()->getRepository(Category::class)->findAll();

        return $this->render('default/_categorylist.html.twig', [
            'categories' => $categories
        ]);
    }
}
