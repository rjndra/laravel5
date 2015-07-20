
@extends('app')
@section('title')

        <title>Add Documents</title>

@stop
@section('content')

<div class="col-sm-3">
	<h2><a class="btn btn-success"  href="{{ url('document') }}">List Documents</a></h2>

	<h2><a class="btn btn-success" href="{{ url('document', 'create') }}">Add Documents</a></h2>
</div>

<div class="col-sm-8">
{!! Form::open( ['url'=>'document', 'enctype'=>'multipart/form-data']) !!}
<div class="form-js">
	<div class="form-group">
		{!! Form::label('tilte', 'Title: ') !!}
		{!! Form::text('title', null, ['class'=> 'form-control']) !!}
	</div>

	 <!-- File Uplaod area  -->
	<div class="form-group">
		{!! Form::label('afile[]', 'Upload File / Files : ') !!}
		{!! Form::file('afile[]', null, ['class'=> 'form-control']) !!}
	<a name="add" class="add_field_button">
        <i class="btn fa fa-plus-circle" style="color:green"></i>
    </a>
	</div>

	
</div>

	<div class="form-group">
		{!! Form::submit('Add Documents', ['class'=> 'btn btn-success form-control']) !!}
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

@section('footer')
	{!! Html::script('dist/js/addfiles.js') !!} 
@stop