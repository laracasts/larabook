<?php namespace Larabook\Handlers;

use Larabook\Mailers\UserMailer;
use Larabook\Registration\Events\UserHasRegistered;
use Laracasts\Commander\Events\EventListener;

class EmailNotifier extends EventListener {

    /**
     * @var UserMailer
     */
    private $mailer;

    /**
     * @param UserMailer $mailer
     */
    public function __construct(UserMailer $mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * @param UserHasRegistered $event
     */
    public function whenUserHasRegistered(UserHasRegistered $event)
    {
        $this->mailer->sendWelcomeMessageTo($event->user);
    }

} 