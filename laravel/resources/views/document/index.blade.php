@extends('app')

@section('content')
<h2><a class="btn btn-info"  href="{{ url('document' , 'show') }}">List Documents</a></h2>

<h2><a class="btn btn-info" href="{{ url('document', 'create') }}">Add Documents</a></h2>
@stop