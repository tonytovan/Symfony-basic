<?php

namespace  App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class QuestionController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('Wat a nice controller!');
    }

    /**
     * @Route("/questions/how-to-tiemy-shoes-with-magic")
     */
    public function show()
    {
        return new Response('Future page to show question');
    }
}
