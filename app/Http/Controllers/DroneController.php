<?php

namespace App\Http\Controllers;

use App\Drone;
use Illuminate\Http\Request;

class DroneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $drones =  Drone::all();

        return view('drone/drones', compact('drones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('drone/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Drone::create($request->all());

        return redirect()->route('drones.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Drone  $drone
     * @return \Illuminate\Http\Response
     */
    public function show(Drone $drone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Drone  $drone
     * @return \Illuminate\Http\Response
     */
    public function edit(Drone $drone)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Drone  $drone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Drone $drone)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Drone  $drone
     * @return \Illuminate\Http\Response
     */
    public function destroy(Drone $drone)
    {
        //
    }
}
