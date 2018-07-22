<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class LuckyController extends Controller
{
    /**
    +      * @Route("/lucky/number")
    +      */
    public function number()
    {
        $number = random_int(0, 100);
        return new Response(
            '<html><body>lucky number: '. $number .'</body></body></html>'
        );
    }

    public function something(){
        return new Response(
            '<html><body>something</body></html>'
        );
    }
}
