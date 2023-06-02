<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class listaddstudent extends Model
{
    use HasFactory;
    protected $table = "liststudent";

    protected $fillable = [
        "name",
        "age",
        "address",
        "telephone"
    ];
}
