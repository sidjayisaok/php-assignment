@extends('layout')

@section('title')
  About
@stop

@section('content')
    <div class="title">Contact us.</div>
      @foreach($peopleArray as $person)
        <div class="little">I can be reached at {{ $person['name'] }}{{ $person['email'] }}</div>
      @endforeach
    <div class="little">What's it all about?</div>
@stop
