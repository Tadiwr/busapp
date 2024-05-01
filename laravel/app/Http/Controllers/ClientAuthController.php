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
            // "email"=> ["required","email"],
            "studentnumber" => ["required","numeric"],
            "password"=> ["required"],
        ]);

        $student = Student::all()
        ->where("studentnumber", $request->studentnumber)
        ->first();

        if ($student->count() == 0) {
            return redirect()->back()->withErrors("Invalid Student Number");
        }

        $user = User::find($student->auth_user_id);

        $creds = [
            "email" => $user->email,
            "password" => $request->password
        ];

        if (Auth::attempt($creds)) {
            return redirect("/booking");
        }else{
            return redirect()->back()->withErrors("Invalid number or password");
        }

    }


    public function register(Request $request) {

        $request->validate([
            "email"=> ["required","email", "unique:users,email"],
            "studentnumber"=> ["required", "numeric"],
            "password"=> ["required"]
        ]);



        if (strlen($request->studentnumber) != 6) {
            return redirect()->back()->withErrors("Student number should be 6 digits in length");
        }

        $user = new User();

        $user->email = $request->email;
        $user->password =  Hash::make($request->password);
        $user->usertype = "STUDENT";

        $user->save();

        if (Auth::attempt($request->only("email", "password"))) {

            $student = new Student();
            $student->studentnumber = (int) $request->studentnumber;
            $student->auth_user_id = auth()->user()->id;

            $student->save();

            return redirect("/booking");
        } else {
            return redirect()->back()->withErrors("Something wrong happend");
        }

    }

    public function showRegistrationPage() {
        return view("auth.client_registration");
    }
}
