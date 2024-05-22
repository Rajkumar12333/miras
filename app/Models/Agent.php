<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;
    protected $fillable = [
        'agtname',
        'mailid',
        'emailid',
        'gst_no',
        'username',
        'passwd',
        'mobile',
        'address',
        'del_status',
        'status',
        'region',
        'branchid',
        'adminRight',
        'masteradmin',
        'authority',
        'add_authority',
        'createdby',
        'createdon',
        'modified_on',
        'modified_by',
        'outstation',
    ];
}
