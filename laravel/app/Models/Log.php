<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;

    public static function log(string $description, $userId) {
        $log = new Log();
        $log->description = $description;
        $log->user_id = $userId;

        $log->save();
    }
}
