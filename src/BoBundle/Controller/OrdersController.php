<?php
/**
 * Created by PhpStorm.
 * User: generalchbil
 * Date: 07/04/2017
 * Time: 13:52
 */

namespace BoBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class OrdersController extends Controller
{

    /**
     * @Route("/commande", name="commande")
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     */
    public function listOrdersAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('orders.html.twig');
    }
}