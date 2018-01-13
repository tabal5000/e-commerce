@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-lg-10 col-lg-offset-1">

      <h1 class="authHeaders">@fa('users',['class' => 'faIcons']) User Administration </h1>

          <table class="table">

              <thead class="thead-inverse">
                  <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Active</th>
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
                      <td> <?php echo $user->active == 1 ? 'Active' : 'Disabled'; ?> </td>
                      <td>
                        <div class="dropdown">
                          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Options
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li>
                              <a id="editUserBtn" href="/users/{{ $user->id }}/edit">
                                @fa('edit', ['class' => 'faIcons']) Edit
                              </a>
                            </li>
                            @if($user->active == 1)
                              <li>
                                <a id="editUserBtn" href="/users/{{ $user->id }}/deactivate">
                                  @fa('ban', ['class' => 'faIcons']) Deactivate
                                </a>
                              </li>
                            @else
                              <li>
                                <a id="editUserBtn" href="/users/{{ $user->id }}/activate">
                                  @fa('check', ['class' => 'faIcons']) Activate
                                </a>
                              </li>
                            @endif

                            <!-- Try this one if the other one does not work. -->

                            <!-- <li>
                              <form method="post" action="/users/{{$user->id}}" id="delUserForm">
                              {{ csrf_field() }}
                              {{ method_field('DELETE') }}
                              @fa('trash-alt', ['class' => 'faIcons'])
                              <button type="submit" class="btn btn-link" id="submitDelUserForm"> Delete</button>
                              </form>
                            </li> -->


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

    <div class="row">

        <div class="col-lg-10 col-lg-offset-1">
          <a href="/createAccount" type="button" class="btn btn-info"> New account </a>
        </div>
    </div>

</div>

@endsection
