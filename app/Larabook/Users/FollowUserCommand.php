<?php namespace Larabook\Users;

class FollowUserCommand {

    /**
     * @var
     */
    public $userId;

    /**
     * @var
     */
    public $userIdToFollow;

    /**
     * @param $userId
     * @param $userIdToFollow
     */
    function __construct($userId, $userIdToFollow)
    {
        $this->userId = $userId;
        $this->userIdToFollow = $userIdToFollow;
    }

}