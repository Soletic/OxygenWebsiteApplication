<?php

namespace Soletic\OxygenWebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SoleticOxygenWebsiteBundle:Default:index.html.twig');
    }
}
