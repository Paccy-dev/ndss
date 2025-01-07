<?php

namespace App\Models;

use App\Models\InfectionCase;
use Illuminate\Database\Eloquent\Model;

class Pandemic extends Model
{
    protected $fillable = [
        'full_name',
        'description',
        'discovery_date',
        'discovery_location'
    ];
    public function infectionCases()
    {
        return $this->hasMany(InfectionCase::class);
    }
}
