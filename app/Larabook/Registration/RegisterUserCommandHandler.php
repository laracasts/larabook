<?php namespace Larabook\Registration;

use Laracasts\Commander\CommandHandler;
use Larabook\Users\UserRepository;
use Larabook\Users\User;
use Laracasts\Commander\Events\DispatchableTrait;

class RegisterUserCommandHandler implements CommandHandler {

    use DispatchableTrait;

    /**
     * @var UserRepository
     */
    protected $repository;

    /**
     * @param UserRepository $repository
     */
    function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Handle the command
     *
     * @param $command
     * @return mixed
     */
    public function handle($command)
    {
        $user = User::register(
            $command->username, $command->email, $command->password
        );

        $this->repository->save($user);

        $this->dispatchEventsFor($user);

        return $user;
    }

}