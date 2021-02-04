<?php

namespace App\Http\Controllers;

use App\Mission;
use App\MissionUsers;
use App\Pilot;
use App\Drone;

use Illuminate\Http\Request;

class MissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $operations = Mission::all();

        return view('mission/missions', compact('operations'));

        // foreach ($mission->missions as $operation) {
        //     echo $operation->pilot->last_name . '<br />';
        // }
    }

    /**
     / Pick a Mission, Add Pilot & Drone
     */
    public function addStaff()
    {
        $pilots = Pilot::all();
        $drones = Drone::all();
        $missions = Mission::all();

        return view('mission/addstaff', compact('pilots', 'drones', 'missions'));
    }

    /**
     / Save Mission, with Added Pilot & Drone
     */
    public function addStaffStore(Request $request)
    {
        MissionUsers::create($request->all());

        return redirect()->route('missions.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mission/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Mission::create($request->all());

        return redirect()->route('missions.index');    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function show(Mission $mission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function edit(Mission $mission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mission $mission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mission $mission)
    {
        //
    }
}
