@extends('layouts/app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <h1 class="authHeaders"> {{ $item->title }} </h1>
                </div>

                <div class="panel-body">


                  <h7> {{ $item->id }} </h4>
                  <h4> {{ $item->description }} </h4>
                  <h7> {{ $item->price }}</h4>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
