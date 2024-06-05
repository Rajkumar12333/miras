<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditPayment extends Model
{
    use HasFactory;
    protected $fillable = [
        'payment_from',
        'agent_id',
        'bank',
        'payment_method',
        'count_dd',
        'amount',
        'voucher',
        'date',
        'debiter_id',
       
    ];
}
