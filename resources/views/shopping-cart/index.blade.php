@extends('layouts/app')

@section('content')

<div class="container">
  @if(Session::has('cart'))
  <div class="row">
    <div class="col-sm-12">
            <table class="table">

                <thead class="thead-inverse">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody class="table">
                  @php
                    $n = 1;

                  @endphp

                  @foreach ($items as $key => $item)
                    <tr>
                        <td>{{ $n }}</td>
                        <td>{{ $item['item']->title }} </td>
                        <td>{{ $item['price'] }}€</td>
                        <td>{{ $item['qty'] }} </td>
                        <td>
                          <div class="btn-group">
                            <button type="button" class="btn btn-primary dropdown-toogle" data-toggle="dropdown">Action <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="/addToCart/{{$key}}">Increase by one</a></li>
                                <li><a href="/reduce/{{$key}}">Reduce by 1</a></li>
                                <li><a href="/remove/{{$key}}">Remove item</a></li>
                            </ul>
                          </div>
                        </td>
                    </tr>
                    @php
                      $n = $n+1;
                    @endphp
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>

    <div class="row">
      <div class="col-sm-6 col-md-6 col-md-offset-8 col-sm-offset-8">
        <h3> <strong> Total Price: {{$totalPrice}}€</strong> </h3>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-sm-6 col-md-6 col-md-offset-8 col-sm-offset-8">
        <a href="/checkout" class="btn btn-success"> Checkout </a>
      </div>
    </div>
    @else
    <div class="row">
      <div class="col-sm-6 col-md-6 col-md-offset-4 col-sm-offset-4">
        <h2> No items in cart </h2>
      </div>
    </div>
    @endif
</div>

@endsection
