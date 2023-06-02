<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addstudent extends Model
{
    use HasFactory;
    protected $table = "addstudent";

    protected $fillable = [
        "name",
        "age",
        "address",
        "telephone"
    ];
}
