<?php
/**
 * @author: william.jehanne@gmail.com
 * Date: 28/07/15
 * Time: 22:55
 */

namespace FrontBundle\Controller;

use \Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        return $this->render("FrontBundle:Default:index.html.twig", array("name"=>"willou"));
    }
}