<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phase;
use App\Models\User;
use App\Models\Activity;
use App\Models\Ressource;
use App\Models\ExternalCost;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('activity', ['activitis' => Activity::with('user','phase', 'ressource', 'externalCost')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('activity.new', ['activitis' => Activity::all(), 'phases' => Phase::all(), 'ressources' => Ressource::all(), 'users' => User::all(), 'externalCosts' => ExternalCost::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $activity = new activity;
        $activity->name = $request->name;
        $activity->start_date = $request->start_date;
        $activity->end_date = $request->end_date;
        $activity->effective_start_date = $request->effective_start_date;
        $activity->effective_end_date = $request->effective_end_date;
        $activity->progress = $request->progress;
        $activity->documentation_link = $request->documentation_link;
        $activity->ressource_id = $request->ressource;
        $activity->phase_id = $request->phase;
        $activity->external_cost_id = $request->externalcost;
        $activity->user_id = $request->user;

        $activity->save();

        return redirect('/activity');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return view('activity.edit', ['phase' => Activity::with('user','phase', 'ressource', 'externalCost')->find($id),'phases' => Phase::all(), 'ressources' => Ressource::all(), 'users' => User::all(), 'externalCosts' => ExternalCost::all()]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $activity = Activity::firstOrNew(['id' => $id]);
        $activity->name = $request->name;
        $activity->start_date = $request->start_date;
        $activity->end_date = $request->end_date;
        $activity->effective_start_date = $request->effective_start_date;
        $activity->effective_end_date = $request->effective_end_date;
        $activity->progress = $request->progress;
        $activity->documentation_link = $request->documentation_link;
        $activity->ressource_id = $request->ressource;
        $activity->phase_id = $request->phase;
        $activity->external_cost_id = $request->externalcost;
        $activity->user_id = $request->user;

        $activity->save();

        return redirect('/activity');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
