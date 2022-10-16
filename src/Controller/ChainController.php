<?php

namespace App\Controller;

use App\Entity\Chain;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ChainController extends AbstractController
{

    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/chain",name="locale")
     */
    public function chain(Request $request)
    {
        dd($this->entityManager->getRepository(Chain::class)->getPaginatedList(1, 5));
    }
}