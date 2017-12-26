@extends('layouts.app')

@section('content')

<div class="col-lg-10 col-lg-offset-1">

    <h1><i class="fa fa-users"></i> User Administration </h1>

    <div class="table-responsive">
        <table class="table table-striped table-hover table-condensed table-responsive">

            <thead class="thead-inverse">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th></th>
                </tr>
            </thead>

            <tbody class="table">
              @php
                $n = 1;
              @endphp

              @foreach ($users as $user)
                <tr>
                    <td>{{ $n }}</td>
                    <td>{{ $user->name }} {{$user->surname}}</td>
                    <td>{{ $user->email }}</td>
                    <td> <?php echo $user->staff == 1 ? 'Staff' : 'Customer'; ?> </td>
                    <td>
                      <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                          Options
                          <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                          <li>
                            <a id="editUserBtn" href="/users/{{ $user->id }}/">
                              @fa('address-card', ['class' => 'faIcons']) User details
                            </a>
                          </li>
                          <li>
                            <a id="editUserBtn" href="/users/{{ $user->id }}/edit">
                              @fa('edit', ['class' => 'faIcons']) Edit
                            </a>
                          </li>
                          <!-- Try this one if the other one does not work.

                          <li>
                            <form method="post" action="/users/{{$user->id}}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-link" id="submitDelUserForm">Delete</button>
                            </form>
                          </li>

                          -->
                          <li>
                            {{ Form::open(['url' => '/users/' . $user->id, 'method' => 'DELETE', 'id' => 'delUserForm']) }}

                              <button type="submit" class="btn btn-link" id="submitDelUserForm">
                                @fa('trash-alt', ['class' => 'faIcons'])
                                Delete
                              </button>

                            {{ Form::close() }}
                        </li>
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

@endsection
