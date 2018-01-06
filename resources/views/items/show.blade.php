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
                              <a href="/addToCart/{{$item->id}}"class="btn btn-success" id="addToCartBtn">Add to Cart</a>
                            </div>
                    </div>

                  </div>

              </div>

          </div>

        </div>

</div>

@endsection
