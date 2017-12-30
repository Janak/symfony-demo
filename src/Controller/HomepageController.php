<?php

namespace App\Controller;

use App\Service\TextGen;
use Jm\Bundle\MarketplaceBundle\Service\MessageGeneratorInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Jm\Bundle\MarketplaceBundle\Controller\HomepageController as BaseHomepageController;

class HomepageController extends Controller
{
    /*public $messageGenerator;

    public function __construct(MessageGeneratorInterface $messageGenerator)
    {
        $this->messageGenerator = $messageGenerator;
    }
    */

    /**
     * @Route("/1", name="client_homepage")
     */
    public function index1()
    {
        return $this->render('@Maker/demoPage.html.twig', [ 'path' => strtoupper('1') ]);
        return $this->render('@Maker/demoPage.html.twig', [ 'path' => strtoupper($this->messageGenerator->getHappyMessage()) ]);

        return rand(1, 10);
    }

    protected function getRand()
    {
        return rand(1, 10);
    }

}
