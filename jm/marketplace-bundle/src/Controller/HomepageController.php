<?php

namespace Jm\Bundle\MarketplaceBundle\Controller;

use App\Form\Type\OrderType;
use Jm\Bundle\MarketplaceBundle\Repository\ProductRepositoryInterface;
use Jm\Bundle\MarketplaceBundle\Service\MessageGenerator;
use Jm\Bundle\MarketplaceBundle\Service\MessageGeneratorInterface;
use Jm\Bundle\MarketplaceBundle\Service\TextGenInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class HomepageController extends Controller
{
    public $messageGenerator;
    public $productManager;



    public function __construct(MessageGeneratorInterface $messageGenerator, ProductRepositoryInterface $productRepository)
    {
        $this->messageGenerator = $messageGenerator;
        $this->productManager   = $productRepository;
    }

    /**
     * @Route("/", name="jm_homepage")
     */
    public function index()
    {
        $form = $this->createForm(OrderType::class);

        $product = $this->productManager->createProduct();
        dump($product);

         //$this->textGen->getText();
        return $this->render('@theme/home.html.twig', [ 'form' => $form->createView() ]);
         return $this->render('@Maker/demoPage.html.twig', [ 'path' => strtolower($this->messageGenerator->getHappyMessage()) ]);
    }

    protected function getRand()
    {
        return rand(1, 1000);
    }
    /**
     * @Route("/foo", name="jm_foo")
     */
    public function foo()
    {
        return $this->render('@Maker/demoPage.html.twig', [ 'path' => 'gunvant' ]);
    }
}
