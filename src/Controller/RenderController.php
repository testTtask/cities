<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class RenderController extends Controller
{
    public function index()
    {
        $number = mt_rand(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number.'<br><a href="'.$this->get('router')->generate('logout').'"><button>Выход</button></a></body></html>'
        );
    }

    public function getCities()
    {
      $em = $this->getDoctrine()->getManager();

      $cities = $em->getRepository('App\Entity\Cities')->getRandomCities();


      foreach ($cities as $city){


      }

    }

}