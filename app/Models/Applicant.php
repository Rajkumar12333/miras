<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'passportno',
        'applicant_email',
        'employeeno',
        'tavano',
        'dob',
        'location',
        'category',
        'country',
        'passportcopy',
        'visacopy',
        'insurancecopy',
        'interviewslip',
        'status',
        'bill',
        'appoint_date',
        'rcddate',
        'subdate',
        'collectdate',
        'sentdate',
        'senton',
        'appt_status',
        'del_status',
        'doc',
        'createdon',
        'modifiedon',
        'createdby',
        'agtid',
        'cms_id',
        'branchid',
        'outstatid',
        'referer',
        'company',
        'visaref',
        'dd',
        'reason',
        'internal_reason',
        'barcode',
        'outstation',
        'number',
        

       
    ];
}
