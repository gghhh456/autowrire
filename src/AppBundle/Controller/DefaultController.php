<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {

        //$key = $this->get('app.myservice')->getText("-456");

        $text = "-456";

        // replace this example code with whatever you need
        return $this->render('Homepage/index.html.twig', array(
            'text' => $text
        ));
    }
}
