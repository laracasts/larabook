@extends('layouts.default')

@section('content')
    <h1 class="page-header">All Users</h1>

    @foreach ($users->chunk(4) as $userSet)
        <div class="row users">
            @foreach ($userSet as $user)
                <div class="col-md-3 user-block">
                    @include ('users.partials.avatar', ['size' => 70])

                    <h4 class="user-block-username">
                        {{ link_to_route('profile_path', $user->username, $user->username) }}
                    </h4>
                </div>
            @endforeach
        </div>
    @endforeach

    {{ $users->links() }}
@stop