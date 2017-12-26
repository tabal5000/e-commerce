@extends('layouts/app')

@section('content')
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Add a new item</h3>
      </div>
      <div class="panel-body">
          <div class="container">
              <form class="form-horizontal" action="/items" method="post">
                  {{ csrf_field() }}
                  <div class="row">
                     <div class="form-group">
                         <div class="col-sm-2">
                             <label for="itemName" class="control-label">Name</label>
                         </div>
                         <div class="col-sm-9">
                             <input type="text" class="form-control" id="title" placeholder="Item name" name="title" >
                         </div>
                     </div>
                 </div>

                 <div class="row">
                     <div class="form-group">
                         <div class="col-sm-2">
                             <label for="inputDescription" class="control-label">Description</label>
                         </div>
                         <div class="col-sm-9">
                             <textarea class="form-control" id="description" name="description" > </textarea>
                         </div>
                     </div>
                 </div>

                 <div class="row">
                     <div class="form-group">
                         <div class="col-sm-2">
                             <label for="inputImageLink" class="control-label">Image URL</label>
                         </div>
                         <div class="col-sm-9">
                             <input type="text" class="form-control" id="img_url" name="img_url" > </textarea>
                         </div>
                     </div>
                 </div>

                 <div class="row">
                     <div class="form-group">
                         <div class="col-sm-2">
                             <label for="inputPrice" class="control-label">Price</label>
                         </div>
                         <div class="col-sm-3">
                             <input type="number" class="form-control" id="price" name="price" placeholder="Price" step="0.01">
                         </div>
                     </div>
                 </div>

                 <div class="row">
                     <div class="form-group">
                         <div class="col-sm-2">
                             <label for="inputStock" class="control-label">Stock</label>
                         </div>
                         <div class="col-sm-3">
                             <input type="number" class="form-control" id="stock" name="stock" placeholder="Stock" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                         </div>
                     </div>
                 </div>

                 <div class="row">
                     <div class="form-group">
                         <div class="col-xs-offset-9 col-md-offset-9 col-lg-offset-10">
                             <button type="submit" class="btn btn-success">Submit</button>
                         </div>
                    </div>
                 </div>
             </form>

             @include('layouts/errors')
        </div>
      </div>
    </div>

@endsection
