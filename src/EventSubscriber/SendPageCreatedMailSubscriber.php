<?php

declare(strict_types=1);

namespace App\EventSubscriber;

use Sulu\Bundle\PageBundle\Domain\Event\PageCreatedEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class SendPageCreatedMailSubscriber implements EventSubscriberInterface
{
    public function __construct(private MailerInterface $mailer)
    {
    }

    public static function getSubscribedEvents()
    {
        return [
            PageCreatedEvent::class => 'sendPageCreatedMail',
        ];
    }

    public function sendPageCreatedMail(PageCreatedEvent $event): void
    {
        $email = (new Email())
            ->from('no-reply@sulu.lo')
            ->to('thomas@sulu.io')
            ->subject('New page created')
            ->text('Page Title: ' . $event->getPageDocument()->getTitle());

        $this->mailer->send($email);
    }
}
