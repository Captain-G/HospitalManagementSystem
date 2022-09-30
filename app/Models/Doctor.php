<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = [
        'd_name',
        'd_photo',
        'd_email',
        'd_number',
        'd_speciality',
        'd_dob',
        'd_ethnicity',
        'd_branch',
    ];
}
