<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indust extends Model
{
    use HasFactory;

    public static function index(){
        return Indust::all();
    }
}
