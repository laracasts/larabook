<article class="media status-media">
    <div class="pull-left">
        @include ('users.partials.avatar', ['user' => $status->user, 'class' => 'status-media-object'])
    </div>

    <div class="media-body status-media-body">
        <h4 class="media-heading status-media-heading">{{ $status->user->username }}</h4>
        <p><small class="status-media-time">{{ $status->present()->timeSincePublished() }}</small></p>

        {{ $status->body }}
    </div>
</article>

@if ($signedIn)
    {{ Form::open(['route' => ['comment_path', $status->id], 'class' => 'comments__create-form']) }}
        {{ Form::hidden('status_id', $status->id) }}

        <div class="form-group">
            {{ Form::textarea('body', null, ['class' => 'form-control', 'rows' => 1]) }}
        </div>
    {{ Form::close() }}
@endif

@unless ($status->comments->isEmpty())
    <div class="comments">
        @foreach ($status->comments as $comment)
            @include ('statuses.partials.comment')
        @endforeach
    </div>
@endunless
