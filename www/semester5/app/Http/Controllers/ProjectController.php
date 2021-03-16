<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProcessModel;
use App\Models\User;
use App\Models\Project;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //dd();
        return view('project', ['projects' => Project::with('processModel','leader')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //


        return view('project.new', ['processModels' => ProcessModel::all(), 'users' => User::all()]);
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
       // dd($request);
        $projekt = new Project;
        $projekt->title = $request->title;
        $projekt->description = $request->description;
        $projekt->approval_date = $request->approval_date;
        $projekt->pritority = $request->pritority;
        $projekt->start_date = $request->start_date;
        $projekt->end_date = $request->end_date;
        $projekt->documentation_link = $request->documentation_link;
        $projekt->progress = $request->progress;
        $projekt->process_model_id = $request->processModel;
        $projekt->leader_id = $request->projectManager;
        $projekt->save();

        return redirect('/project');
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
        return view('project.edit', ['projects' => Project::with('processModel','leader')->find($id),'processModels' => ProcessModel::all(), 'users' => User::all()]);
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
        $projekt = Project::firstOrNew(['id' => $id]);
        $projekt->title = $request->title;
        $projekt->description = $request->description;
        $projekt->approval_date = $request->approval_date;
        $projekt->pritority = $request->pritority;
        $projekt->start_date = $request->start_date;
        $projekt->end_date = $request->end_date;
        $projekt->documentation_link = $request->documentation_link;
        $projekt->progress = $request->progress;
        $projekt->process_model_id = $request->processModel;
        $projekt->leader_id = $request->projectManager;
        $projekt->save();

        return redirect('/project');
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
