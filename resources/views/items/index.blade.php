@extends('layouts/app')

@section('content')
<div class="panel panel-default">
  <div class="panel panel-body">
    <ul>
        @foreach ($items as $item)
            <li>
              <a href="/items/{{$item->id}}"> {{ $item->title }} </a>
            </li>
        @endforeach
    </ul>
  </div>
</div>
@endsection
