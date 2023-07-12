<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\User;

use Illuminate\Http\Request;

class AuthenticateController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name'       => 'required|max:150',
            'email'       => 'required|email|max:200',    
            'password'       => 'required',   
            'profile_img' => 'sometimes|mimes:jpg,jpeg,png,bmp,tiff |max:4096',
            'profession' => 'required|max:150',
            'city' => 'required|max:150',
            'country' => 'required|max:200',
            'gender' => 'required|max:150',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;        
        $user->password = Hash::make($request->password);   
        $user->profession = $request->profession;
        $user->city = $request->city;   
        $user->country = $request->country;   
        $user->gender = $request->gender;
        $user->user_type_id = 2;   
       
        
        if (!empty($request->profile_img)) {
            $imageName = time().'.'.$request->profile_img->extension();  
            $request->profile_img->move(public_path('profile_images'), $imageName);
            $user->profile_img = $imageName;          
        }

        $user->save();

        return response()->json(['message' => 'User has been registered successfully','success' => true, 'status_code' => 200, 'data' => $user]);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'       => 'required|email|max:200',    
            'password'       => 'required',   
        ]);

        $credentials = $request->only('email', 'password');
        
        if (Auth::attempt($credentials)) {
            return response()->json(['message' => 'User has been logged in successfully','success' => true, 'status_code' => 200, 'data' => Auth::user()]);
        }
        else{
            return response()->json(['message' => 'User does not exist in our record','success' => false, 'status_code' => 500]);
        }
    }
}
