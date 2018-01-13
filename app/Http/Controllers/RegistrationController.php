<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Route;
use App\User;

use Illuminate\Auth\Events\Registered;
use App\Jobs\SendVerificationEmail;

class RegistrationController extends Controller
{

    public function __construct() {
      $this->middleware('guest');
    }

    public function index() {
      return view('auth/register');
    }

    public function store() {

      $this->validate(request(), [
        'name' => 'required|string|max:255',
        'surname' => 'required|string|max:255',
        'address' => 'required|string|max:255',
        'phone_number' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:4|confirmed',
        'g-recaptcha-response' => 'required|captcha'
      ]);
      $data = request()->all();
      $request = Request::create('/api/users','POST', $data);
      $user = Route::dispatch($request)->original;
      dispatch(new SendVerificationEmail($user));
      return view('email/verification');
      
    }

    public function verify($token){
      $user = User::where('email_token',$token)->first();
      $user->verified = 1;
      if($user->save()){
      return view('email/confirm',['user'=>$user]);
    }
  }
}
