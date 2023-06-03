<?php

namespace App\Controller;

use App\Entity\Veilletechno;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VeilleTechnoController extends AbstractController
{
    #[Route('/veilletechno', name: 'veille_techno')]
    public function index(ManagerRegistry $doctrine): Response
    {
        $repository = $doctrine->getRepository(Veilletechno::class);
        $lesveilletechno = $repository->findAll();
        dump($lesveilletechno);

        return $this->render('veille_techno/veilletechno.html.twig', [
            'lesveilletechno' => $lesveilletechno,
        ]);
    }
}
