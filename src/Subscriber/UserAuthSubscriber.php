<?php

namespace App\Subscriber;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Security\Http\Event\LoginSuccessEvent;

class UserAuthSubscriber implements EventSubscriberInterface
{

    /**
     * @var EntityManagerInterface
     */
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    /**
     * @inheritDoc
     */
    public static function getSubscribedEvents()
    {
        return [
            LoginSuccessEvent::class => 'onLoginSuccess',
        ];
    }

    /**
     * Update LastLogin Value on login success
     * @param LoginSuccessEvent $event
     * @throws \Exception
     */
    public function onLoginSuccess(LoginSuccessEvent $event)
    {
        $user = $event->getUser();
        $user->setLastLogin(new \DateTime());

        $this->em->flush();
    }
}