@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <h1 class="authHeaders">   @fa('user-plus', ['class' => 'faIcons']) Edit {{$item->title}} </h1>
                </div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/items/{{$item->id}}">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Item Name</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" value="{{$item->title}}" required autofocus>

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                          <label for="description" class="col-md-4 control-label">Description</label>

                          <div class="col-md-6">
                            <textarea class="form-control" rows="10" id="description" name="description"required autofocus> {{$item->description}}</textarea>

                            @if ($errors->has('description'))
                            <span class="help-block">
                              <strong>{{ $errors->first('description') }}</strong>
                            </span>
                            @endif
                          </div>
                        </div>

                        <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                          <label for="price" class="col-md-4 control-label">Price</label>

                          <div class="col-md-6">
                            <input id="price" type="text" class="form-control" name="price" value="{{$item->price}}" required autofocus>

                            @if ($errors->has('price'))
                            <span class="help-block">
                              <strong>{{ $errors->first('price') }}</strong>
                            </span>
                            @endif
                          </div>
                        </div>

                        <div class="form-group{{ $errors->has('img') ? ' has-error' : '' }}">
                          <label for="img" class="col-md-4 control-label">Image URL Link</label>

                          <div class="col-md-6">
                            <input id="img" type="text" class="form-control" name="img" value="{{$item->img}}" required autofocus>

                            @if ($errors->has('img'))
                            <span class="help-block">
                              <strong>{{ $errors->first('img') }}</strong>
                            </span>
                            @endif
                          </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
