<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Drone;

class Drone extends Model
{
	protected $fillable = ['nickname', 'make', 'model', 'serial_number', 'year'];
}
