<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Tests\Controller;

class DefaultController extends Controller
{
    public function index()
    {
        return new Response(
            '<html><body>Success</body></html>'
        );
    }

    public function number()
    {
        $number = mt_rand(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number.'<br><a href="'.$this->get('router')->generate('app_lucky_number').'"><button>Выход</button></a></body></html>'
        );
    }

}