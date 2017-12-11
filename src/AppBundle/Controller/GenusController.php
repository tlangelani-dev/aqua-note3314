<?php
/**
 * Created by PhpStorm.
 * User: tlangelani
 * Date: 2017/12/11
 * Time: 4:02 PM
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class GenusController
{
    /**
     * @Route("/genus/{name}")
     *
     */
    public function showAction($name)
    {
        return new Response('You selected: ' . $name);
    }
}
