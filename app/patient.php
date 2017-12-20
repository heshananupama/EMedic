<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
    protected $fillable = [
        'firstName', 'secondName', 'gender','guardianTelephone','mobile','address','age','disease',
    ];

    public function measurements()
    {
        return $this->belongsTo('App\measurement','id','patient_id');
    }
}
