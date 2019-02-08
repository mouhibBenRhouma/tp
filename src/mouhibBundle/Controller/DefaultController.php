<?php

namespace mouhibBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@mouhib/Default/index.html.twig');
    }
}
