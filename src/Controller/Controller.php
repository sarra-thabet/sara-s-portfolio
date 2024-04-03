<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
class Controller extends AbstractController
{
    /**
     * @Route("intro", name="intro")
     */
    public function intro():Response
    {
        return $this->render('base.html.twig');
    }
    
}
