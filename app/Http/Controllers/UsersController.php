<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Route;
use App\User;

class UsersController extends Controller
{

  public function __construct() {
    $this->middleware('auth');
  }

  public function index() {
      $user = request()->user();
      $user->authorizeRoles(['staff','admin']);
      if($user->isAdmin()) {
        $request = Request::create('/api/users' . '?role=admin', 'GET');
        $users = Route::dispatch($request)->getData();
      } else if($user->isStaff()) {

      }
      $request = Request::create('/api/users', 'GET');
      $users = Route::dispatch($request)->getData();
      return view('users/index',compact('users'));
  }

  public function edit(User $user) {
      return view('users/edit',compact('user'));
  }

  public function update(User $user) {
    $this->validate(request(), [
      'name' => 'required|string|max:255',
      'surname' => 'required|string|max:255',
      'address' => 'required|string|max:255',
      'phone_number' => 'required|string|max:255',
      'email' => 'required|string|email|max:255|unique:users',
      'password' => 'required|string|min:4|confirmed',
    ]);
    $request = Request::create('/api/users/' . $user->id , 'PUT', [$user]);
    $response = Route::dispatch($request);
    return redirect('/users');
  }

  public function destroy($id) {
      $request = Request::create('/api/users/' . $id , 'DELETE');
      $response = Route::dispatch($request);
      return redirect('/users');
    }
}
