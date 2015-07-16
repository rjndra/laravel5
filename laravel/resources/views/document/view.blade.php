@extends('app')

@section('content')

<h1>Documents</h1>
<div class="body">
    <p>Document no. 1</p>
</div>
<a class="btn btn-info" href="{{ url('document', 'create') }}">Add Documents</a>
<a class="btn btn-info" href="{{ url('document') }}">Home</a>

@stop