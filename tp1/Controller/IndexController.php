<?php

    namespace App\Controller;
    
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    
    class IndexController extends AbstractController
    {
        /**
         * @Route("/{name}, name="home")
         */
        public function home($name): Response
        {
            #return new Response('<h1>Ma première page Symfony</h1>');
            return $this->render('index.html.twig',['name' => $name]);
        }
    }