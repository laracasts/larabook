<?php

use Larabook\Statuses\LeaveCommentOnStatusCommand;

class CommentsController extends \BaseController {

	/**
	 * Leave a new comment.
	 *
	 * @return Response
	 */
	public function store()
	{
        $input = array_add(Input::get(), 'user_id', Auth::id());

        $this->execute(LeaveCommentOnStatusCommand::class, $input);

        return Redirect::back();
	}

}