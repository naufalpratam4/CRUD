<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Session\Session;


class AuthController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }
    public function loginPost(Request $request)
    {
        $credetials = ['email' => $request->email, 'password' => $request->password];
        if (Auth::attempt($credetials)) {
            return redirect('/')->with('success', 'login success');
        }

        return redirect()->route('login')->with('error', 'Email or password is incorrect.');
    }

    // public function loginJson(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'email' => 'required|email',
    //         'password' => 'required',
    //     ]);

    //     if ($validator->fails()) {
    //         return response()->json([
    //             'message' => 'Validation fails',
    //             'errors' => $validator->errors()
    //         ], 422);
    //     }

    //     $user = User::where('email', $request->email)->first();

    //     if ($user) {

    //         if (Hash::check($request->password, $user->password)) {

    //             $token = $user->createToken('auth-token')->plainTextToken;

    //             return response()->json([
    //                 'message' => 'Login Successfull',
    //                 'token' => $token,
    //                 'data' => $user
    //             ], 200);
    //         } else {
    //             return response()->json([
    //                 'message' => 'Incorrect credentials',
    //             ], 400);
    //         }
    //     } else {

    //         return response()->json([
    //             'message' => 'Incorrect credentials',
    //         ], 400);
    //     }
    // }

    public function registerPost(Request $request)
    {
        // return view("");
        // dd($request->all());
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();
        return back()->with("success", "Successfuly");
    }
    public function register()
    {
        return view("auth.register");
    }

    public function logout(Request $request): RedirectResponse
    {
        // dd($request->session()->all());
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
