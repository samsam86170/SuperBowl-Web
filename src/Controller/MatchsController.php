<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * Description of MatchsController
 *
 * @author Samsam
 */
class MatchsController extends AbstractController{
    
    /**
     * @Route ("/matchs", name="matchs")
     * @return Response
     */
    public function index(): Response{
        return $this->render("pages/matchs.html.twig");
        
    }
}
