@extends('layouts/app')

@section('content')
    <h7> {{ $item->id }}</h4>
    <h2> {{ $item->title }}</h4>
    <h4> {{ $item->description }}</h4>
    <h7> {{ $item->price }}</h4>

@endsection
