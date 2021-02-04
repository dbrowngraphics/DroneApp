<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pilot extends Model
{
    protected $fillable = ['first_name', 'last_name', 'email', 'certification_id'];

    public function certification() {

    	return $this->belongsTo(Certification::class);
    }

    public function getFullNameAttribute() {

    	return $this->first_name . ' ' . $this->last_name;
    }
}
