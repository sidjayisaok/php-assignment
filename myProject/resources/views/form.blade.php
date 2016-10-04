@extends('layout')

@section('title')
  Submit
@stop

@section('content')
  <head>"
    <meta name="csrf-token" content="{{ csrf_token() }}" />
  </head>
  <div class="content">
    <div class="little">Submit your form here <br /></div>
  </div>
  <form action="form" method="POST">
    <input type="submit" value="submit">
    <input type="hidden" name="_token" value= "{{ csrf_token() }}">
    <input type="hidden" name="_method" value="PUT">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
  </form>
@stop
