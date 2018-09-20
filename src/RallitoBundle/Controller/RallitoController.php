<?php

namespace RallitoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class RallitoController extends Controller
{
    
    public function saludaAction(Request $request)
    {
        //echo "iernieb".$parametre1;
        // echo "<h1>Mis ojos lo ven todo!</h1>";
        // die();
        return $this->render('RallitoBundle:Default:index.html.twig' , array(
            'parametre1' => $request->get('parametre1')
        ));
    }
    
}
