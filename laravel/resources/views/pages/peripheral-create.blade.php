@extends('layouts.main-layout')

@section('content')
  <h1>Add new Peripheral</h1>
  <form class="" action="{{route('peripheral-store')}}" method="POST">  {{--punta alla peripheral-store per salvare i dati inseriti--}}
    @csrf     {{--per la sicurezza--}}
    @method('POST')   {{--post di laravel--}}

    <label for="name">Name:</label>
    <input name="name" type="text">

    <br>

    <label for="model">Model:</label>
    <input name="model" type="text">

    <br>

    <label for="price">Price:</label>
    <input name="price" type="text">

    <br>

    <label for="consumption">Consumption(kwh):</label>
    <input name="consumption" type="text">

    <br>

    <input type="submit" value="Add">
  </form>
@endsection
