<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function showRegisterForm(){
        return view('auth.register');
    }

    public function register(Request $request){
        $request -> validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'type' => 'required',
            'password' => 'required|min:6',
        ]);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'type'=>$request->type,
            'password'=>Hash::make($request->password),
        ]);

        return redirect('/login')->with('success', 'Registration successful! Please log in.');
    }

    public function showLoginForm(){
        return view('auth.login');
    }

    public function login(Request $request){
        $crendentials = ['email' => $request->email, 'password' => $request->password];

        if(Auth::attempt($crendentials)){
            return redirect(route('dashboard'));
        }

        return redirect('/login')->with('error', 'Invalid credentials. Please try again.');
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect(route('login'));
    }

    public function profile($id){
        $user = User::find($id);

        return view('auth.profile', ['user' => $user]);
    }

    
    public function editProfile($id, Request $request){
        $user = User::find($id);

        if(empty($request->image)){
            $newImageName = $request->currentImage;
        }else{
            $newImageName = time() . '-' . $request->name . '.' . $request->image->extension();

            $request->image->move(public_path('images'), $newImageName);
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->image_path = $newImageName;

        $user->save();

        return redirect(route('dashboard'))->with('success','Your information edited successfully');
    }
}
