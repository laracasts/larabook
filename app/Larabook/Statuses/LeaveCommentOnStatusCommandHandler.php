<?php namespace Larabook\Statuses;

use Laracasts\Commander\CommandHandler;

class LeaveCommentOnStatusCommandHandler implements CommandHandler {

    /**
     * @var StatusRepository
     */
    private $statusRepo;

    /**
     * @param StatusRepository $statusRepo
     */
    public function __construct(StatusRepository $statusRepo)
    {
        $this->statusRepo = $statusRepo;
    }

    /**
     * Handle the process of leaving a comment for a status.
     *
     * @param object $command
     * @return void
     */
    public function handle($command)
    {
        $comment = $this->statusRepo->leaveComment(
            $command->user_id,
            $command->status_id,
            $command->body
        );

        // Viewer: anything else you want to do here? Dispatch events, etc.

        return $comment;
    }

}