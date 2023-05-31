<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

class AccueilController extends AbstractController
{
    #[Route('/', name: 'accueil')]
    public function index(): Response
    {
        return $this->render('accueil/accueil.html.twig', [
        ]);
    }
    #[Route('/cv', name: 'cv')]
    public function cv(): Response
    {
        $pdfcv = $this->getParameter('kernel.project_dir').'/public/pdf/CV Allan.pdf';
        return
            $this->file($pdfcv, 'CV Allan.pdf', ResponseHeaderBag::DISPOSITION_INLINE);
    }
}
