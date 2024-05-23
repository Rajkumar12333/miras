<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbl_document extends Model
{
    use HasFactory;
    protected $fillable = [
        'app_id',
        'app_name',
        'passport',
        'passport_number',
        'passport_validity_date',
        'photo',
        'count',
        'visa_form',
        'declaration',
        'health_declaration',
        'VFS_declaration',
        'covering_letter',
        'covering_letter_from_date',
        'covering_letter_to_date',
        'invitation_letter',
        'invitation_letter_from_date',
        'invitation_letter_to_date',
        'personal_bank_statement',
        'pbs_given_date',
        'personal_it_returns',
        'pit_date',
        'company_bank_statement',
        'cbs_date',
        'company_it_returns',
        'cit_date',
        'payslip',
        'payslip_type',
        'ticket_reservation',
        'tr_fromdate',
        'tr_todate',
        'insurance_for_travel',
        'ift_fromdate',
        'ift_todate',
        'hotelbooking',
        'hb_fromdate',
        'hb_todate',
        'yellow_fever_card',
        'chamber_of_commerce',
        'forex_receipt',
        'dd',
        'dd_date',
        'dd_number',
        'Addressproof',
        'address_proof',
    ];
}
