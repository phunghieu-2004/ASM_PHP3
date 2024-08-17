<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(){
        return view('client.login');
    }

    public function login(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/client');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(){
        Auth::logout();
        \request()->session()->invalidate();
        return redirect('/client');
    }

    public function verify($token){
        
        $user = User::query()
        ->where('email_verified_at',null)
        ->where('email',base64_decode($token))->firstOrFail();
        if($user){
            $user ->update(['email_verified_at'=>Carbon::now()]);
        return redirect()->route('client.index');
        }
        // foreach($users as $user){
        //     if(Hash::check($user->email,$token)){
        //         $user->update(['email_verified_at'=>Carbon::now()]);
        //         return redirect()->route('/');
        //     }
        // }
    }

    public function checkout(){
       
        return view('client.checkout');
    }
}
