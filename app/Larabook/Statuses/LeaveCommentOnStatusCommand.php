<?php namespace Larabook\Statuses;

class LeaveCommentOnStatusCommand {

    /**
     * @var string
     */
    public $user_id;

    /**
     * @var string
     */
    public $status_id;

    /**
     * @var string
     */
    public $body;

    /**
     * @param string user_id
     * @param string status_id
     * @param string body
     */
    public function __construct($user_id, $status_id, $body)
    {
        $this->user_id = $user_id;
        $this->status_id = $status_id;
        $this->body = $body;
    }

}