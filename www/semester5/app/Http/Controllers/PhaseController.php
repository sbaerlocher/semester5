<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phase;
use App\Models\User;
use App\Models\Project;

class PhaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       // dd(Phase::with('project','visum')->get());
        return view('phase', ['phases' => Phase::with('project','visum')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('phase.new', ['projects' => Project::all(), 'users' => User::all()]);
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
        $phase = new Phase;
        $phase->name = $request->name;
        $phase->start_date = $request->start_date;
        $phase->end_date = $request->end_date;
        $phase->effective_start_date = $request->effective_start_date;
        $phase->effective_end_date = $request->effective_end_date;
        $phase->release_date = $request->release_date;
        $phase->progress = $request->progress;
        $phase->release_date = $request->release_date;
        $phase->project_id = $request->project;
        $phase->visum_id = $request->visum;
        $phase->documentation_link = $request->documentation_link;
        $phase->save();

        return redirect('/phase');
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
        return view('phase.edit', ['phase' => Phase::with('project','visum')->find($id),'projects' => Project::all(), 'users' => User::all()]);

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
        $phase = Phase::firstOrNew(['id' => $id]);
        $phase->name = $request->name;
        $phase->start_date = $request->start_date;
        $phase->end_date = $request->end_date;
        $phase->effective_start_date = $request->effective_start_date;
        $phase->effective_end_date = $request->effective_end_date;
        $phase->release_date = $request->release_date;
        $phase->progress = $request->progress;
        $phase->release_date = $request->release_date;
        $phase->project_id = $request->project;
        $phase->visum_id = $request->visum;
        $phase->documentation_link = $request->documentation_link;
        $phase->save();


        return redirect('/phase');
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
