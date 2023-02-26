<?php

namespace App\Controller;

use App\Entity\Orders;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ApiOrdersController extends AbstractController
{
    #[Route('/api/orders', name: 'app_api_orders')]
    public function index(ManagerRegistry $entityManager): JsonResponse
    {
       $data = $entityManager->getRepository(Orders::class)->list();
       
       return new JsonResponse($data);
    }
}
