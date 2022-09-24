<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'p_name',
        'p_email',
        'p_number',
        'p_residence',
        'p_dob',
        'p_insurance',
        'p_card_number',
    ];
}
