@extends('app')

@section('content')

<div class="form-box" id="login-box">
    <div class="header">Register New Membership</div>
    
    	{!! Form::open( ['url'=>'users']) !!}
        
        <div class="body bg-gray">

        <!-- User Full Name -->
        <div class="form-group">
        	{!! Form::text('fullname', null, ['class'=> 'form-control', 'placeholder' => "Full name"]) !!}
        </div>

        <!-- Username  -->
        <div class="form-group">
        	{!! Form::text('username', null, ['class'=> 'form-control', 'placeholder' => "User name"]) !!}
        </div>

		<!-- User email Id -->
		<div class="form-group">
        	{!! Form::email('email', null, ['class'=> 'form-control', 'placeholder' => "Email Id"]) !!}
        </div>

        <!-- Password Enter area -->
        <div class="form-group">
        	{!! Form::password('password', ['class'=> 'form-control', 'placeholder' => "Password"]) !!}
        </div>
	</div>
    
    <div class="footer">  

        {!! Form::submit('Sign me up', ['class' => 'btn bg-olive btn-block']) !!}                  
		
		<a href="{{  action ('UserController@index') }}" class="text-center">I already have a membership</a>
    
    </div>

    {!! Form::close() !!}

</div>

@stop