<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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

    public function show(User $user)
    {
        $user = User::find($user->id);
        return resposne()->json($user,200);
    }

    public function store(Request $data)
    {
        $user =  User::create([
          'name' => $data['name'],
          'surname' => $data['surname'],
          'address' => $data['address'],
          'phone_number' => $data['phone_number'],
          'email' => $data['email'],
          'password' => bcrypt($data['password']),
        ]);

        $user
            ->roles()
            ->attach(App\Role::where('name','customer')->first());

        //dd($user);

        return response()->json($user, 201);
    }

    public function update(Request $request,User $user)
    {
      $user->update([
        'name' => $request['name'],
        'surname' => $request['surname'],
        'address' => $request['address'],
        'phone_number' => $request['phone_number'],
        'email' => $request['email'],
        'active' => $request['active'],
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
