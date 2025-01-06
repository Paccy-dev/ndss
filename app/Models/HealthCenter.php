<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HealthCenter extends Model
{
    protected $fillable=[
        'full_name',
        'location',
        'head'
    ];
    public function infectionCases()
    {
        return $this->hasMany(InfectionCase::class);
    }
}
