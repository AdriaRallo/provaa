<?php

namespace RallitoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('RallitoBundle:Default:index.html.twig');
    }

    public function helloAction()
    {
        echo "<h1>Hello world!!</h1>";
        die();
        //return $this->render('RallitoBundle:Default:index.html.twig');
    }
    
    
    public function adeuAction()
    {
        echo "<h1>Adeu artisteeeeerl!!</h1>";
        die();
        //return $this->render('RallitoBundle:Default:index.html.twig');
    }
    
}
