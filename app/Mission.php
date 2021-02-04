<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\MissionUsers;

class Mission extends Model
{
	protected $fillable = ['start_date', 'end_date', 'location', 'mission_name', 'mission_details'];

	public function missions () {

		return $this->hasMany(MissionUsers::class);
	}

	public function getMissions ()
	{
		return MissionUsers::where('mission_id', $this->id)->get();
	}
}
