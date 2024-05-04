<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crud_operation extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'content',
       
    ];
}
