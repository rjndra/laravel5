@extends('app')

@section('content')

<div class="col-sm-3">
	<h2><a class="btn btn-success"  href="{{ url('document') }}">List Documents</a></h2>

	<h2><a class="btn btn-success" href="{{ url('document', 'create') }}">Add Documents</a></h2>
</div>

<div class="col-sm-8">
		<h1>{!! $document->title !!}</h1>
		<div >
	    	<p>{!! $document->body !!}</p>
		</div>
</div>

@stop