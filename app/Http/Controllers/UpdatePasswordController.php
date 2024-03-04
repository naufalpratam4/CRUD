<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use App\Models\User;

class UpdatePasswordController extends Controller
{
    public function edit()
    {
        return view("password.editPassword");
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'current_password' => 'required',
            'password' => 'required|min:6|max:100',
            'confirm_password' => 'required|same:password'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation Error',
                'errors' => $validator->errors()
            ], 422);
        }

        $user = User::where('id', $id)->first();
        if (Hash::check($request->current_password, $user->password)) {
            $user->update([
                'password' => Hash::make($request->password)
            ]);
            return response()->json([
                'message' => 'Password successfully updated',
            ], 200);
        } else {
            return response()->json([
                'message' => 'Old password does not matched',
            ], 400);
        }


        // $try = Hash::check($request->current_pasword, auth()->user()->password);
        // dd($try);
        // $request->validate([
        //     'current_password' => ['required'],
        //     'password' => ['required', 'min:8', 'confirmed'],
        // ]);
        // // // if (Hash::check($request->current_password, auth()->user()->password)) {
        //     auth()->user()->update($request->only('password'));

        //     return back()->with('message', 'Your password has been update');
        // }

        // throw ValidationException::withMessages([
        //     'current_password' => 'Your current password does not match with our record'
        // ]);
    }
}
