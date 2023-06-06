<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StageController extends AbstractController
{
    #[Route('/stage', name: 'stage')]
    public function index(): Response
    {
        return $this->render('stage/stage.html.twig', [
        ]);
    }

    #[Route('/stage/pubert', name: 'stagepubert')]
    public function pubert(): Response
    {
        return $this->render('stage/pubert.html.twig', [
        ]);
    }

    #[Route('/stage/pubert', name: 'stagekline')]
    public function kline(): Response
    {
        return $this->render('stage/kline.html.twig', [
        ]);
    }
}
