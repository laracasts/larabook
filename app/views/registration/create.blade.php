@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h1>Register!</h1>

            @include('layouts.partials.errors')

            {{ Form::open(['route' => 'register_path', 'name' => 'registrationForm', 'ng-controller' => 'RegistrationFormController']) }}
                <!-- Username Form Input -->
                <div class="form-group">
                    {{ Form::label('username', 'Username:') }}
                    {{ Form::text('username', null, ['class' => 'form-control', 'required' => 'required', 'ng-model' => 'username']) }}
                </div>

                <!-- Email Form Input -->
                <div class="form-group">
                    {{ Form::label('email', 'Email:') }}
                    {{ Form::email('email', null, ['class' => 'form-control', 'ng-model' => 'email', 'required' => 'required']) }}
                </div>

                <!-- Password Form Input -->
                <div class="form-group">
                    {{ Form::label('password', 'Password:') }}
                    {{ Form::password('password', ['class' => 'form-control', 'ng-model' => 'password', 'required' => 'required']) }}
                </div>

                <!-- Password_confirmation Form Input -->
                <div class="form-group">
                    {{ Form::label('password_confirmation', 'Password Confirmation:') }}
                    {{ Form::password('password_confirmation', ['class' => 'form-control', 'ng-model' => 'password_confirmation', 'required' => 'required']) }}
                </div>

                <div class="form-group">
                    {{ Form::submit('Sign Up', ['class' => 'btn btn-primary', 'ng-disabled' => 'registrationForm.$invalid']) }}
                </div>

            {{ Form::close() }}
        </div>
    </div>
@stop