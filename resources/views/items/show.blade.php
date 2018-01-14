@extends('layouts/app')

@section('content')

<div class="container">

        <div class="row">

          <div class="col-md-11 col-md-offset-1">
              <div class="panel panel-default">

                  <div class="panel-body" id="itemBody">

                    <div class="col-md-4">
                        <img class="img-responsive center-block showItemImg" src="{{$item->img}}" alt="">
                    </div>

                    <div class="col-md-8">
                            <div class="caption-full row">
                                <h1 class="pull-left"> {{$item->title}}
                            </div>
                            <div class="row">
                              <p id="itemDescription"> {{$item->description}} </p>
                            </div>
                            <div class="row">
                              <h1>{{$item->price}}€</h1>
                            </div>
                            <div class="row">
                              <div class="col-md-3">
                              <a href="/addToCart/{{$item->id}}"class="btn btn-success" id="addToCartBtn">Add to Cart</a>
                              </div>
                            @auth
                              @if(auth()->user()->hasAnyRole(['admin','staff']))
                              <div class="col-md-3">
                                <a href="/items/{{$item->id}}/edit"class="btn btn-info" id="addToCartBtn">Edit item</a>
                              </div>
                              <div class="col-md-3">
                                  @if ($item->active == '1')
                                  <a href="/items/{{$item->id}}/deactivate" class="btn btn-danger" id="addToCartBtn">
                                    Deactivate
                                  </a>
                                  @else
                                  <a href="/items/{{$item->id}}/activate" class="btn btn-success" id="addToCartBtn">
                                    Activate
                                  </a>
                                @endif
                              </div>
                              @endif
                            @endauth
                    </div>

                  </div>

              </div>

          </div>

        </div>

</div>

@endsection
