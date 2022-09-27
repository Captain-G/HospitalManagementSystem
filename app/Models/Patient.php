<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Patient extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'p_name',
        'p_email',
        'p_number',
        'p_residence',
        'p_dob',
        'p_insurance',
        'p_card_number',
    ];

    public function toSearchableArray(){
        return [
            'p_name' => $this -> p_name,
            'p_email' => $this -> p_email,
        ];
    }
}
