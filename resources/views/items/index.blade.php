@extends('layouts/app')

@section('content')
<div class="panel panel-default">
  <div class="panel panel-body">
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
