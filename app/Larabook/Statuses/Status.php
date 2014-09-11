<?php namespace Larabook\Statuses;

use Larabook\Statuses\Events\StatusWasPublished;
use Laracasts\Commander\Events\EventGenerator;
use Laracasts\Presenter\PresentableTrait;

class Status extends \Eloquent {

    use EventGenerator, PresentableTrait;

    /**
     * Fillable fields for a new status.
     *
     * @var array
     */
    protected $fillable = ['body'];

    /**
     * Path to the presenter for a status.
     *
     * @var string
     */
    protected $presenter = 'Larabook\Statuses\StatusPresenter';

    /**
     * A status belongs to a user.
     */
    public function user()
    {
        return $this->belongsTo('Larabook\Users\User');
    }

    /**
     * Publish a new status.
     *
     * @param $body
     * @return static
     */
    public static function publish($body)
    {
        $status = new static(compact('body'));

        $status->raise(new StatusWasPublished($body));

        return $status;
    }

    /**
     * @return mixed
     */
    public function comments()
    {
        return $this->hasMany('Larabook\Statuses\Comment');
    }
    
}