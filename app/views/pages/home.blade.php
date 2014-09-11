@extends('layouts.default')

@section('content')
    <div class="jumbotron">
        <h1>Welcome to Larabook!</h1>

        <p>Welcome to the premier place to talk about Laravel with others. Why don't you sign up to see what all the fuss is about?</p>

        @if ( ! $currentUser)
            <p>
                {{ link_to_route('register_path', 'Sign Up', null, ['class' => 'btn btn-lg btn-primary']) }}
            </p>
        @endif
    </div>
@stop