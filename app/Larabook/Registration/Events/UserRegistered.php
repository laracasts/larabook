<?php namespace Larabook\Registration\Events;

use Larabook\Users\User;

class UserRegistered {

    public $user;

    function __construct(User $user)
    {
        $this->user = $user;
    }

} 