@extends('layouts.main')
@section('container')
    <h1>Halaman About</h1>

    <h3>{{ $name }}</h3>
    <P>{{ $email }}<P>

    <img src="{{$img}}" alt="{{ $name }}"width="160px" class="img-thumbnail rounded-circle">    
@endsection