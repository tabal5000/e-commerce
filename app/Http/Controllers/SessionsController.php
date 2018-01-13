<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class SessionsController extends Controller
{

    public function __construct() {
      $this->middleware('guest')->except(['destroy']);
    }

    public function index() {
      return view('auth/login');
    }

    public function store() {
      $data = request()->all();
      if (!Auth::attempt(['email' => $data['email'], 'password' => $data['password'], 'active' => 1,'verified' => 1])) {
        return back()->withErrors([
          'message' => 'Please check your credentials and try again.' 
        ]);
      }
      return redirect()->back();
    }

    public function destroy() {
      auth()->logout();
      return redirect()->route('home');
    }

}
