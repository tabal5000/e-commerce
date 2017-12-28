<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersAPIController extends Controller
{
    public function index(Request $request)
    {
        dd($request);
        $users =  User::all();

        return response()->json($users,200);
    }

    public function show(User $user)
    {
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
        $user->update($request->all());

        return response()->json($user, 200);
    }

    public function delete(User $user)
    {
        $user->delete();

        return response()->json(null, 204);
    }
}
