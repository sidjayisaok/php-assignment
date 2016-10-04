@extends('layout')

@section('title')
  My Stuff
@stop

@section('content')
    <div class="title">Here is some stuff.</div>
      @foreach($myStuff as $thisStuff)
        <div class="little">{{ $thisStuff['brand'] }} is a {{ $thisStuff['type'] }}.</div>
      @endforeach
    <div class="little">Would you like to know more?</div>
@stop
