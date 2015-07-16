@extends('app')

@section('content')

{!! Form::open( ['url'=>'document']) !!}
	<div class="form-group">
		{!! Form::label('tilte', 'Title: ') !!}
		{!! Form::text('title', null, ['class'=> 'form-control']) !!}
	</div>

	 <!-- text area  -->
	<div class="form-group">
		{!! Form::label('Body', 'Body: ') !!}
		{!! Form::textarea('body', null, ['class'=> 'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Add Article', ['class'=> 'btn btn-primary form-control']) !!}
	</div>
{!! Form::close() !!}

<a class="btn btn-info" href="{{ url('document', 'show') }}">View Documents</a>
<a class="btn btn-info" href="{{ url('document') }}">Home</a>

@stop