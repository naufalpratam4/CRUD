<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Models\User;

class ProfileController extends Controller
{
    public function index()
    {
        return view("profile.myProfile")->with(["myprofile" => User::all()]);
    }

    public function EditProfile(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "name" => 'required',
            'email' => 'required|min:6'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'validation error',
                'errors' => $validator->errors(), 422
            ]);
        }

        $user = User::where('name', $request->name)->first();
        if (Hash::check($request->email, $user->email)) {
            $user->update(['email' => Hash::make($request->email)]);
            return view('profile.editProfile')->with(['editprofile' => User::all()]);
        }
    }
}
