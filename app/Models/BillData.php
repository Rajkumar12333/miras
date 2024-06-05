<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillData extends Model
{
    use HasFactory;
    protected $table = 'bill_datas';
    protected $fillable = [
        'bill_no',
        'applicant_name',
        'passport_no',
        'employee_no',
        'travel_no',
        'booking_ref',
        'department',
        'location',
        'country',
        'method',
        'date',
        'agent_name',
        'agent_address',
        'visa_fees',
        'vfs_charge',
        'service_charge',
        'gst_tax',
        'agent_region',
        'sbc',
        'kkc',
        'dd_charge',
        'mis_charge',
        'cour_charge',
        'photoc_charge',
        'photo_charge',
        'not_charge',
        'service_tax',
        'round_off',
        'billstatus',
        'total_cal',
        'amount_words',
        'service_purpose',
        'billed_date',
        'update_on',
        'print',
        'old_data',
        'applicant_refid',
        'created_on', 
    ];
}
