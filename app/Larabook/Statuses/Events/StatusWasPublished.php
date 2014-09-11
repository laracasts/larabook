<?php namespace Larabook\Statuses\Events;


class StatusWasPublished {

    /**
     * @var string
     */
    public $body;

    /**
     * @param $body
     */
    function __construct($body)
    {
        $this->body = $body;
    }

} 