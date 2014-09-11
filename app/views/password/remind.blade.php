@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h1>Need to reset your password?</h1>

            {{ Form::open() }}
                <!-- Email Form Input -->
                <div class="form-group">
                    {{ Form::label('email', 'Email:') }}
                    {{ Form::email('email', null, ['class' => 'form-control', 'required']) }}
                </div>

                <!-- Reset Form Input -->
                <div class="form-group">
                    {{ Form::submit('Reset Password', ['class' => 'btn btn-primary form-control']) }}
                </div>
            {{ Form::close() }}
        </div>
    </div>
@stop