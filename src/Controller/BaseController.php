<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BaseController extends AbstractController
{
    #[Route('/', name: 'app_accueil')]
    public function index(): Response
    {
        return $this->render('base/index.html.twig', [
        ]);
    }

    #[Route('/ajoutBonbon', name: 'app_ajout_bonbon')]
    public function ajoutBonbon(): Response
    {
        return $this->render('base/ajoutBonbon.html.twig', [

        ]);
    }
}
