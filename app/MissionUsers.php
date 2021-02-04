<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MissionUsers extends Model
{
	protected $fillable = ['mission_id', 'pilot_id', 'drone_id'];

	public $timestamps = false;

	public function pilot() {

		// $id = $this->pilot_id;
		// return Pilot::where('id', $id)->first();

		return $this->belongsTo(Pilot::class);
	}

	public function drone() {
		return $this->belongsTo(Drone::class);
	}
}
