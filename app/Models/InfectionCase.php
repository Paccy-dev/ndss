<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InfectionCase extends Model
{
    protected $fillable = [
        'infection_date',
    ] ;

    public function patient()
    {
        return $this->belongsTo(Patient::class,'') ;    
    }
    public function pandemic()
    {
        return $this->belongsTo(Pandemic::class,'') ;
    }
    public function healthCenter()
    {
        return $this->belongsTo(HealthCenter::class,'') ;
    }
}
