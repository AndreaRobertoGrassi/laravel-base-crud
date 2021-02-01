@extends('layouts.main-layout')
@section('content')
    <h1>Peripheral:</h1>
    <h1> Torna a <a href="{{ route('peripheral-index') }}"> Perpherals-index </a></h1>

    <h1>id: {{$peripheral -> id}}</h1>
    <h1>model: {{$peripheral -> model}}</h1>
    <h1>price: {{$peripheral -> price}}</h1>
    <h1>consumption(kwh): {{$peripheral -> consumption}}</h1>

@endsection
