<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BtsSioController extends AbstractController
{
    #[Route('/btssio', name: 'btssio')]
    public function index(): Response
    {
        return $this->render('bts_sio/btssio.html.twig', [
            'controller_name' => 'BtsSioController',
        ]);
    }
}
