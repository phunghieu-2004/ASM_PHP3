<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\VerifyEmail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    public function index(){
        return view('client.register');
    }


    public function register(Request $request){
        $data =$request->validate([
            'name'=>['required', 'string', 'max:50'],
            'email'=>['required', 'string', 'email', 'max:100', 'unique:users'],
            'password'=>['required', 'string', 'min:8', 'confirmed'],
            'address' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:15'],
        ]);
        //tao moi user
        $user = User::query()->create($data);
        //login voi user vua tao
        
        \Illuminate\Support\Facades\Auth::login($user);

        // gen lai token cho user vua dang nhap
        $request ->session()->regenerate();

        //xac thuc tai khoan
        $token = base64_encode($user->email);
        Mail::to($user->email)->send(new VerifyEmail($token,$user->name));
        
        //quay lai trang phia trc
        return redirect()->intended('/client');

    }
}
