@extends('layouts.app')

@section('content')
<div class="container">
    <a href={{route('demon/index')}}><h3>Index</h3</a>
    <a href={{route('demon/show')}}><h3>Show</h3</a>
</div>
@endsection
