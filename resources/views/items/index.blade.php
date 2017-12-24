@extends('layouts/master')

@section('content')
    <ul>
        @foreach ($items as $item)
            <li>
              <a href="/items/{{$item->id}}"> {{ $item->title }} </a>
            </li>
        @endforeach
    </ul>
@endsection
