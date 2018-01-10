<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;

class UsersAPIController extends Controller
{
    public function index(Request $request)
    {
        $user = request()->user();
        $user->authorizeRoles(['staff','admin']);
        if($user->isAdmin()) {
          $users = User::whereHas('roles', function($q) {
                  $q->where('name', 'staff');
                  })->get();
        } else if ($user->isStaff()) {
          $users = User::whereHas('roles', function($q) {
            $q->where('name','customer');
          })->get();
        }
        //$users =  User::all();

        return response()->json($users,200);
    }

    public function show(User $user) {
      $user = User::find($user->id);
      return response()->json($user,200);
    }

    public function store(Request $data)
    {

        $role_customer = Role::where('name','customer')->first();
        $role_staff = Role::where('name','staff')->first();

        $newUser =  User::create([
          'name' => $data['name'],
          'surname' => $data['surname'],
          'address' => $data['address'],
          'phone_number' => $data['phone_number'],
          'email' => $data['email'],
          'password' => bcrypt($data['password']),
          'email_token' => base64_encode($data['email'])
        ]);

        $user = request()->user();

        if($user) {
          if($user->isAdmin()) {
            $newUser->roles()->attach($role_staff);
          }
        } else {
          $newUser->roles()->attach($role_customer);
        }
        return response()->json($newUser, 201);
    }

    public function update(Request $request,User $user)
    {
      $user->update([
        'name' => $request['name'],
        'surname' => $request['surname'],
        'address' => $request['address'],
        'phone_number' => $request['phone_number'],
        'email' => $request['email'],
        'password' => bcrypt($request['password']),
      ]);
      return response()->json($user, 200);
    }

    public function delete(User $user)
    {
        $user->delete();

        return response()->json(null, 204);
    }

    public function ban(User $user) {
      $user->update([
        'active' => '0',
      ]);
      return response()->json($user,200);
    }

    public function unban(User $user) {
      $user->update([
        'active' => '1',
      ]);
      return response()->json($user,200);
    }
}
