<?php

namespace  Jm\Bundle\MarketplaceBundle\Service;
use Jm\Bundle\MarketplaceBundle\Service\MessageGeneratorInterface;

class MessageGenerator implements MessageGeneratorInterface
{
    public function getHappyMessage()
    {
        $messages = [
            'You did it! You updated the system! Amazing!',
            'That was one of the coolest updates I\'ve seen all day!',
            'Great work! Keep going!',
        ];

        $index = array_rand($messages);

        return $messages[$index];
    }
}