<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Route;
use App\User;

class UsersController extends Controller
{
  public function index() {
      $request = Request::create('/api/users', 'GET');
      $users = Route::dispatch($request)->getData();
      return view('users/index',compact('users'));
  }

  public function destroy($id) {
      $request = Request::create('/api/users/' . $id , 'DELETE');
      $response = Route::dispatch($request);
      return redirect('/users');
    }
}
