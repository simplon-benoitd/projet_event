<?php

namespace EPSI\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{

    public function indexAction()
    {
        return $this->render('EPSIEventBundle:Home:index.html.twig');
    }
}
