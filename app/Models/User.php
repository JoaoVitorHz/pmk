<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'name', 
        'email',
        'cpf',
        'phone',
        'birthday',
        'registration_date',
        'donation_interval',
        'donation_value',
        'address',
        'district', 
        'number_address',
        'zip_code',
        'card_number',
        'card_holder',
        'validation_data',
        'security_code',
        'card_banner',
        'first_six_numbers',
        'last_four_numbers'
    ];

    use HasFactory;
}
