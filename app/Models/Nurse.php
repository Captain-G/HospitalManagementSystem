<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nurse extends Model
{
    use HasFactory;
    protected $fillable = [
        'n_name',
        'n_photo',
        'n_email',
        'n_number',
        'n_dob',
        'n_branch',
    ];
}
