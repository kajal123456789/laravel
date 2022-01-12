<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Input;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Factory as ValidationFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Hash;


class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function signup()
    {
        return view('signup');
    }

    public function postRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:users,name',
            'email'=> 'required|email|unique:users|email:rfc,dns',
            'password'=>'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("login")->with($request->only('email', 'password'));
    }

    public function postLogin(Request $request)
    {
        
        // $password = Hash::make('secret');

        // $credentials = $request->validate([
        //     'email'=> ['required', 'email'],
        //     'password'=> ['required'],
        // ]);
        
        $credentials = [
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ];
        // dd($credentials);

        if(Auth::guard('web')->attempt($credentials)){
            dd($credentials);
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return redirect("signup")->withSuccess('Oppes! You have entered invalid credentials');
    }

   

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }

    public function dashboard()
    {
        if(Auth::check()){
            return view('/');
        }
  
        return redirect("login")->withSuccess('Opps! You do not have access');
    }

    public function logout() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}
