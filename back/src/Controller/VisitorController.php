<?php

namespace App\Controller;

use App\Repository\VisitorRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class VisitorController extends AbstractController
{
    /**
     * @var VisitorRepository
     */
    private $repository;

    public function __construct(VisitorRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @Route("/visitor", name="visitor")
     */
    public function index()
    {
        return $this->render('visitor/login.html.twig', [
            'controller_name' => 'VisitorController',
        ]);
    }

    /**
     * @Route("/read/message",name="read_message")
     */
    public function read()
    {
        $message=$this->repository->findMessage();
        return $this->render('visitor/read.html.twig',[
            'message'=>$message
        ]);
    }
}
