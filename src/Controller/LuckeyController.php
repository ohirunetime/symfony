<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


class LuckeyController extends AbstractController
{
    /**
     * @Route("/luckey/number")
     */

    public function number(): Response
    {
     $number = random_int(1,100);
     return $this->render('lucky/number.html.twig',[
         'number'=>$number,
     ]);
    }
}
