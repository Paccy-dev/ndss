<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'full_name',
        'birth_date',
        'birth_location',
        'gender',
        'marital_status',
        'id_no',
    ];
    public function infectionCases()
    {
        return $this->hasMany(InfectionCase::class);
    }
}
