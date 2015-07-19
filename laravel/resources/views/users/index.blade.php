@extends('app')

@section('title')

        <title>Sign In|Users</title>
        {!! Html::style('dist/css/template.css') !!} 

@stop

@section('content')

<div class="form-box" id="login-box">
            <div class="header">Sign In</div>
            {!! Form::open( ['url'=>'users']) !!}
                <div class="body bg-gray">
                <!-- User name area -->
                    <div class="form-group">
                        {!! Form::text('username', null, ['class'=> 'form-control', 'placeholder' => "User ID"]) !!}
                    </div>

                     <!-- password area  -->
                    <div class="form-group">
                        {!! Form::password('password', ['class'=> 'form-control', 'placeholder' => "Password"]) !!}
                    </div>

                    <!-- remenber checkbox area  -->
                    <div class="form-group">
                        {!! Form::checkbox('remember_me', null, ['class'=> 'form-control']) !!} Remember Me
                    </div>
                </div>

                <div class="footer"> 

                    {!! Form::submit('Sign me In', ['class' => 'btn bg-olive btn-block']) !!}

                    <p><a href="#">I forgot my password</a></p>
                    
                    <a href="{{  action ('UserController@create') }}" class="text-center">Register a new membership</a>
                </div>

            {!! Form::close() !!}

        </div>

        
@stop