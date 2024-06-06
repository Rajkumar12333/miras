<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'referer',
        'passportno',
        'country',
        'visafees',
        'visa_method',
        'vfs_charge',
        'vfs_method',
        'date',
        'recepno',
        'staff_id',
        'app_id',
        'app_email',
        'track_id',
        'created_on'
       
    ];
}
