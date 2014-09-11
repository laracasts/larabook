<?php namespace Larabook\Statuses;

use Laracasts\Commander\CommandHandler;
use Laracasts\Commander\Events\DispatchableTrait;

class PublishStatusCommandHandler implements CommandHandler {

    use DispatchableTrait;

    /**
     * @var StatusRepository
     */
    protected $statusRepository;

    /**
     * @param StatusRepository $statusRepository
     */
    function __construct(StatusRepository $statusRepository)
    {
        $this->statusRepository = $statusRepository;
    }

    /**
     * Handle the command
     *
     * @param $command
     * @return mixed
     */
    public function handle($command)
    {
        $status = Status::publish($command->body);

        $status = $this->statusRepository->save($status, $command->userId);

        $this->dispatchEventsFor($status);

        return $status;
    }

}