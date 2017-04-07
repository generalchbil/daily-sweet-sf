<?php
/**
 * Created by PhpStorm.
 * User: generalchbil
 * Date: 07/04/2017
 * Time: 13:39
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class NavController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('home.html.twig');
    }

    /**
     * @Route("/reservation", name="reservation")
     */
    public function reservationAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('reservation.html.twig');
    }

    /**
     * @Route("/food-menu", name="food")
     */
    public function foodAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('food-menu.html.twig');
    }

    /**
     * @Route("/contact-us", name="contact-us")
     */
    public function contactUsAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('contact.html.twig');
    }
}