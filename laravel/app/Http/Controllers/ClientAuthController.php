<?php

namespace App\Http\Controllers;

use Hash;
use App\Models\User;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientAuthController extends Controller
{
    public function login(Request $request){
        request()->validate([
            "email"=> ["required","email"],
            "password"=> ["required"],
        ]);

        if (Auth::attempt($request->only("email","password"))) {
            return redirect("/booking");
        }else{
            return redirect()->back()->withErrors("Invalid email or password");
        }

    }


    public function register(Request $request) {

        $request->validate([
            "email"=> ["required","email", "unique:users,email"],
            "firstname"=> ["required"],
            "lastname"=> ["required"],
            "studentnumber"=> ["required", "numeric"],
            "password"=> ["required"]
        ]);



        if (strlen($request->studentnumber) != 6) {
            return redirect()->back()->withErrors("Student number should be 6 digits in length");
        }


        dd($request);

        $user = new User();

        $user->email = $request->email;
        $user->password =  Hash::make($request->password);
        $user->username = $request->username;
        $user->usertype = "STUDENT";

        $user->save();

        if (Auth::attempt($request->only("email", "password"))) {

            $student = new Student();
            $student->firstname = $request->firstname;
            $student->lastname = $request->lastname;
            $student->studentnumber = $request->studentnumber;
            $student->auth_user_id = auth()->user()->id;

            return redirect("/booking");
        } else {
            return redirect()->back()->withErrors("Something wrong happend");
        }

    }

    public function showRegistrationPage() {
        return view("auth.client_registration");
    }
}
