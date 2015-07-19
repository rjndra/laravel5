@extends('app')

@section('title')

        <title>Documents</title>

@stop

@section('content')

<div class="col-sm-3">
	<h2><a class="btn btn-success"  href="{{ url('document') }}">List Documents</a></h2>

	<h2><a class="btn btn-success" href="{{ url('document', 'create') }}">Add Documents</a></h2>

</div>

<div class="col-sm-8">
<table class="table text-center">
@foreach($files as $document)
<tr>
	<td>
		<a href=" #"><h3>{!! $document['title'] !!}</h3></a>
		<div >
	    	<p>{!! $document['created_at'] !!}</p>
		</div>
</td>
<td>
		<div>
			<p>{!! $document['nof'] !!}</p>
		</div>
</td>
<td>

		<div>
			<a href=" #" class="btn btn-info">Edit</a> | <a href=" #"  class="btn btn-danger">Delete</a>
		</div>
</td>

</tr>
@endforeach
</table>
</div>
@stop