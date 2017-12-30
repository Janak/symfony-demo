<?php

namespace  Jm\Bundle\MarketplaceBundle\Service;

use Jm\Bundle\MarketplaceBundle\Service\MessageGeneratorInterface;
use Jm\Bundle\MarketplaceBundle\Service\TextGenInterface;

class TextGen implements TextGenInterface
{
    protected $messageGenerator;

    public function __construct(MessageGeneratorInterface $messageGenerator)
    {
        $this->messageGenerator = $messageGenerator;
    }

    public function getText()
    {
       return strtoupper($this->messageGenerator->getHappyMessage());
    }
}