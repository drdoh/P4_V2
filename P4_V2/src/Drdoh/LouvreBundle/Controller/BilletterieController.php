<?php

namespace Drdoh\LouvreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BilletterieController extends Controller
{
    public function indexAction()
    {
        return $this->render('DrdohLouvreBundle:Default:index.html.twig');
    }
}
