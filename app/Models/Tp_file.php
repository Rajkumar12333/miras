<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tp_file extends Model
{
    use HasFactory;
    protected $fillable = [
        'track_id',
        'staff_id',
        'file_name',
        'created_on',
       
    ];
}
