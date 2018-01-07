@extends('layouts/app')

@section('content')
<div class="panel panel-default panelMargin">
  <div class="panel panel-body">
    @if (session('status'))
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <div class="alert alert-success">
              <h4> {{ session('status') }} </h4>
          </div>
        </div>
      </div>
    @endif
      <div class="row">
        @foreach($items as $item)
        <div class="col-xs-6 col-sm-4 col-md-3 itemEl">
          <a href="/items/{{$item->id}}">
          <div>
            <img src="{{$item->img}}" class="img-responsive resize itemImg">
              <div>
                <h4 class="itemTitle"> {{$item->title}} </h4>
              </div>
          </div>
          </a>
        </div>
        @endforeach

      </div>
  </div>
</div>
@endsection
