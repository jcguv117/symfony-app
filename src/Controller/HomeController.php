<?php

namespace App\Controller;

use App\Entity\Orders;
use App\Entity\Products;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $products = $entityManager->getRepository(Products::class)->findAll();
        $orders = $entityManager->getRepository(Orders::class)->findAll();
        $reports = $entityManager->getRepository(Orders::class)->list();

        $request = Request::createFromGlobals();
        // get the host name
        $host = $request->getHttpHost();

        return $this->render('home/index.html.twig', [
            'products' => $products,
            'orders' => $orders,
            'reports' => $reports,
            'host' => $host,
        ]);
    }
}
