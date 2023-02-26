<?php

namespace App\Controller;

use App\Entity\Products;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ApiProductsController extends AbstractController
{
    #[Route('/api/products', name: 'app_api')]
    public function index(ManagerRegistry $entityManager): JsonResponse
    {
        $products = $entityManager
            ->getRepository(Products::class)
            ->findAll();

        $data = [];

        foreach ($products as $product) {
            $data[] = [
                'idproduct' => $product->getIdproduct(),
                'productName' => $product->getProductName(),
                'price' => $product->getPrice(),
            ];
        }

        return new JsonResponse($data);
    }
}
