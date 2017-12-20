<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class measurement extends Model
{
    protected $fillable = [
        'bpm', 'temp',
    ];

    public function patient()
    {
        return $this->belongsTo('App\patient', 'id','patient_id');
    }

}


