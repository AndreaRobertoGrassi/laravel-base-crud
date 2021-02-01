@extends('layouts.main-layout')
@section('content')
    <h1>Peripherals:</h1>
    <h1>Create new <a href="{{ route('peripheral-create') }}"> Peripheral </a> </h1>   {{--punto alla pagina per creare una nuova peripheral--}}
    <ul>
        @foreach ($peripherals as $peripheral)
            <li>
                <a href="{{ route('peripheral-show', $peripheral -> id) }}">      {{--punto alla singola peripheral--}}
                    {{ $peripheral -> name }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection
