@extends('app')

@section('content')

<div class="col-sm-3">
	<h2><a class="btn btn-success"  href="{{ url('document') }}">List Documents</a></h2>

	<h2><a class="btn btn-success" href="{{ url('document', 'create') }}">Add Documents</a></h2>
</div>

<div class="col-sm-8">
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
		{!! Form::submit('Add Article', ['class'=> 'btn btn-success form-control']) !!}
	</div>
{!! Form::close() !!}


@if ($error->any())
	<ul class="alert alert-danger">
		@foreach($errors->all() as $error)
			<li>{!! $errors !!}</li>
		@endforeach

@endif
</div>




@stop