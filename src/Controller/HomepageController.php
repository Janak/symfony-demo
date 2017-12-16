<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\ProductRepository;

class HomepageController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function index(ProductRepository $products)
    {
        $products = $products->findBySomething('name');

        if ($products)
            // replace this line with your own code!
            return $this->render('@Maker/demoPage.html.twig', [ 'path' => 'platform' ]);
        else
            return $this->render('@Maker/demoPage.html.twig', [ 'path' => 'Rajkot' ]);
    }


}
