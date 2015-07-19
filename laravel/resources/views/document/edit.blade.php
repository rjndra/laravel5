@extends('app')
@section('title')

        <title>Edit Documents</title>

@stop
@section('content')

<div class="col-sm-3">
	<h2><a class="btn btn-success"  href="{{ url('document') }}">List Documents</a></h2>

	<h2><a class="btn btn-success" href="{{ url('document', 'create') }}">Add Documents</a></h2>
</div>

<div class="col-sm-8">
{!! Form::model($document,  ['method'=>'PATCH', 'action'=>['DocumentController@update', $document->id]]) !!}
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


@if ($errors->any())
	<ul class="alert alert-danger">
		@foreach($errors->all() as $error)
			<li>{!! $error !!}</li>
		@endforeach

@endif
</div>




@stop