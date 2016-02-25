<?php

namespace MyApp\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MyAppUserBundle::layoutAcceuil.html.twig');
    }
    
     public function index2Action()
    {
        return $this->render('MyAppUserBundle:User:inscription.html.twig');
    }
}
