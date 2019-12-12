<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class ProStageController extends AbstractController
{
    /**
     * @Route("/", name="proStage_accueil")
     */
    public function index()
    {
        return $this->render('pro_stage/index.html.twig');
    }

    /**
     * @Route("/Stages", name="proStage_Stages")
     */
    public function indexStages()
    {
        return $this->render('pro_stage/indexStages.html.twig');
    }

    /**
     * @Route("/Formations", name="proStage_Formations")
     */
    public function indexFormations()
    {
        return $this->render('pro_stage/indexFormations.html.twig');
    }

    /**
     * @Route("/Entreprises", name="proStage_Entreprises")
     */
    public function indexEntreprises()
    {
        return $this->render('pro_stage/indexEntreprises.html.twig');
    }
}
