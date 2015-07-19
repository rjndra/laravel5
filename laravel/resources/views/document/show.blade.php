@extends('app')

@section('title')
	<title>Show Documents</title>
@stop

@section('content')

<div class="col-sm-3">
	<h2><a class="btn btn-success"  href="{{ url('document') }}">List Documents</a></h2>

	<h2><a class="btn btn-success" href="{{ url('document', 'create') }}">Add Documents</a></h2>
</div>

<div class="col-sm-8">
<table class="table text-center">
<tr>
	<td>
		<a href=" {!! action('DocumentController@show', [$document->id]) !!}"><h3>{!! $document->title !!}</h3></a>
		<div >
	    	<p>{!! $document->body !!}</p>
		</div>
</td>
<td>
		<div>
			<p>No. of documents</p>
		</div>
</td>
<td>

		<div>
			<a href=" {!! action('DocumentController@edit', [$document->id]) !!}" class="btn btn-info">Edit</a> | <a href=" {!! action('DocumentController@destroy', [$document->id]) !!}"  class="btn btn-danger">Delete</a>
		</div>
</td>

</tr>
</table>
</div>

@stop