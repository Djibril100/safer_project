<?php

namespace App\Controller;

use App\Repository\BienRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    #[Route('/accueil', name: 'app_accueil')]
    public function index(BienRepository $rep): Response
    {
        $biens = $rep->findAll();
        return $this->render('accueil/index.html.twig', [
            'biens' => $biens,
        ]);
    }
}
