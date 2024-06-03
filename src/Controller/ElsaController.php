<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ElsaController extends AbstractController

{
    #[Route('/elsa/reponse', name: 'app_elsa')]
    public function index(): Response
    {
        date_default_timezone_set('Europe/Paris');
        $test0=utf8_encode(strftime('%Hh:%Mmin:%Ss'));
        $date=utf8_encode(strftime('%A,%d %B %Y, %Veme semaine'));
        return $this->render('elsa/index.html.twig', [
            'controller_name' => 'Elsa',
            'date' => $date,
            'temps' => $test0,
            'Prenom' => $_POST["Firstname"],
            'Nom' => $_POST["Name"],
        ]);
    }

    /*class ElsaController2 extends AbstractController

{*/
#[Route('/elsa', name: 'app_formulaire')]
public function index2()
{
    return $this->render('elsa/formulaire.html.twig', [
        'controller_name' => 'ElsaController',
    ]);

}
}



 