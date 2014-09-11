@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h1>Reset Your Password</h1>

            {{ Form::open() }}
                {{ Form::hidden('token', $token) }}
                
                <!-- Email Form Input -->
                <div class="form-group">
                    {{ Form::label('email', 'Email:') }}
                    {{ Form::email('email', null, ['class' => 'form-control', 'required']) }}
                </div>
                
                <!-- Password Form Input -->
                <div class="form-group">
                    {{ Form::label('password', 'Password:') }}
                    {{ Form::password('password', ['class' => 'form-control', 'required']) }}
                </div>
                
                <!-- Password_confirmation Form Input -->
                <div class="form-group">
                    {{ Form::label('password_confirmation', 'Password Confirmation:') }}
                    {{ Form::password('password_confirmation', ['class' => 'form-control', 'required']) }}
                </div>

                <!-- submit Form Input -->
                <div class="form-group">
                    {{ Form::submit('Submit', ['class' => 'btn btn-primary form-control']) }}
                </div>
            {{ Form::close() }}
        </div>
    </div>
@stop