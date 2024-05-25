<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyInfo extends Model
{
    use HasFactory;
    protected $fillable = [
        'companyname',
        'emailid',
        'username',
        'passwd',
        'address',
        'del_status',
        'branchid',
        'adminRight',
        'masteradmin',
        'createdon',
        'createdby',
        

       
    ];
}
