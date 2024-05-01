<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    public function authUser() {
        return $this->belongsTo(User::class);
    }

    public static function attemptLogin(int $studentnumber, string $password) {
        $student = Student::all()
        ->where("studentnumber", $studentnumber)
        ->first();

        if ($student == null) {
            return false;
        }

        $user = User::find($student->auth_user_id);

        $creds = [
            "email" => $user->email,
            "password" => $password
        ];

        return Auth::attempt($creds);
    }
}
