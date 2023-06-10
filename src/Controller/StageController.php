<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
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

    #[Route('/stage/kline', name: 'stagekline')]
    public function kline(): Response
    {
        return $this->render('stage/kline.html.twig', [
        ]);
    }

    #[Route('/docinstallation', name: 'docinstallation')]
    public function docinstallation(): Response
    {
        $pdfcv = $this->getParameter('kernel.project_dir').'/public/pdf/Procedure_installation_screenhub.pdf';
        return
            $this->file($pdfcv, 'Procedure_installation_screenhub.pdf', ResponseHeaderBag::DISPOSITION_INLINE);
    }

    #[Route('/docutilisation', name: 'docutilisation')]
    public function docutilisation(): Response
    {
        $pdfcv = $this->getParameter('kernel.project_dir').'/public/pdf/Manuel_utilisation_screenhub.pdf';
        return
            $this->file($pdfcv, 'Manuel_utilisation_screenhub.pdf', ResponseHeaderBag::DISPOSITION_INLINE);
    }

    #[Route('/docpresentation', name: 'docpresentation')]
    public function ddocpresentation(): Response
    {
        $pdfcv = $this->getParameter('kernel.project_dir').'/public/pdf/Procedure_installation_screenhub.pdf';
        return
            $this->file($pdfcv, 'Procedure_installation_screenhub.pdf', ResponseHeaderBag::DISPOSITION_INLINE);
    }
}
