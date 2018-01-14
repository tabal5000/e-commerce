@extends('layouts/app')

@section('content')
<div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
            <h1>Checkout</h1>
            <h4>Your Total: {{ $total }}€</h4>
            <div id="charge-error" class="alert alert-danger {{ !Session::has('error') ? 'hidden' : ''  }}">
                {{ Session::get('error') }}
            </div>
            <form action="#" method="post" id="checkout-form">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" class="form-control field" required name="name" placeholder="Jane Doe">
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" id="address" class="form-control field" required name="address" placeholder="Main Street">
                        </div>
                    </div>
                    <hr>
                </div>
                <div id="card-element">
                </div>
                {{ csrf_field() }}
                <button type="submit" class="btn btn-success button-pay">Pay {{$total}}€</button>
                <div class="error"></div>
            </form>
        </div>
</div>
@section('scripts')
  <script src="https://js.stripe.com/v3/"></script>
  <script src="/js/checkout.js"></script>
@endsection
@endsection
