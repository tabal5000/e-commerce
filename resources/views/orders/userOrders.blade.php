@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-lg-10 col-lg-offset-1">

      <h1 class="authHeaders">@fa('archive',['class' => 'faIcons ']) My Orders </h1>

          <table class="table">

              <thead class="thead-inverse">
                  <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Surname</th>
                      <th>Address</th>
                      <th>Price</th>
                      <th>Accepted</th>

                  </tr>
              </thead>

              <tbody class="table">
                @php
                  $n = 1;
                @endphp

                @foreach ($orders as $order)
                <tr>
                  <td>{{$n}}</td>
                  <td>{{$order->user_id->name}}</td>
                  <td>{{$order->user_id->surname}}</td>
                  <td>{{$order->user_id->address}}</td>
                  <td>{{$order->cart->totalPrice}}</td>
                  <td><?php echo $order->processed == 1 ? 'True' : 'False'; ?></td>
                  <td>
                    <div class="btn-group">
                      <button class="btn btn-default dropdown-toogle" data-toggle="dropdown">Options</button>
                      <ul class="dropdown-menu">
                        <li>
                          <a href="#" type="button" class="accordion-toggle"
                          data-toggle="collapse" data-target="#collapse{{$n}}"
                          onclick="toggleTrElement({{$n}})">
                          @fa('list', ['class' => 'faIcons']) View details
                          </a>
                        </li>
                      </ul>
                    </div>
                  </td>

                  </tr>
                  <tr class="hidden" id="tr{{$n}}">
                    <td></td>
                    <td colspan="12">
                    <div id="collapse{{$n}}" class="collapse">
                      <div class="row">
                        <div class="col-sm-12">
                                <table class="table">

                                    <thead class="thead-inverse">
                                        <tr>
                                            <th>#</th>
                                            <th>Item</th>
                                            <th>Item Price</th>
                                            <th>Quantity</th>
                                            <th>Total Item Price</th>

                                        </tr>
                                    </thead>

                                    <tbody class="table">
                                      @php
                                        $n2 = 1;
                                      @endphp

                                      @foreach($order->cart->items as $item)
                                        <tr>
                                            <td>{{ $n2 }}</td>
                                            <td>{{ $item->item->title }} </td>
                                            <td>{{ $item->item->price }}</td>
                                            <td>{{ $item->qty }} </td>
                                            <td>{{ $item->price }}</td>

                                        </tr>
                                        @php
                                          $n2 = $n2+1;
                                        @endphp
                                        @endforeach

                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div></td>
                  </tr>
                  @php
                    $n = $n+1;
                  @endphp
                  @endforeach
              </tbody>

          </table>
    </div>


</div>

@endsection
