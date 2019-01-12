<?php

namespace App\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class LuckyController
{
    /**
     * @Route("/lucky/number/{slug}")
     */
    public function  number($slug)
    {
        $number = random_int(0,100);
        return new Response
            (
                '<html><body>Lucky number: '
                .
                $number
                .
                $slug.
                '</body></html>'
            );
    }
}