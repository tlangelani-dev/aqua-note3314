<?php
/**
 * Created by PhpStorm.
 * User: tlangelani
 * Date: 2017/12/11
 * Time: 4:02 PM
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class GenusController extends Controller
{
    /**
     * @Route("/genus/{name}")
     * @param string $name The name of genus
     *
     * @return Response A responce instance
     */
    public function showAction($name)
    {
        return $this->render('genus/show.html.twig', [
            'name' => $name,
            'notes' => ['Freedom', 'Attitude', 'Accountability', 'Energy']
        ]);
    }
}
