<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $projects=Project::where('owner_id',auth()->id())->get();
        return view('projects.index',['projects'=>$projects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = request()->valide([
            'title' => ['required','min:1','max:255'],
            'description' => 'required'
        ]);
        
        $validated['owner_id']=auth()->id();

        // $projects=new Project;
        // $projects->title=request('title');
        // $projects->description=request('description');
        // $projects->save();
        Project::create($validated);
        return redirect('/projects');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        // $project=Project::findOrFail($id);
        //  return view('projects.show',compact('project'));
        // abort_unless(auth()->user()->owns($project),403);
        // return view('projects.show',compact('project'));
        $this->authorize('update',$project);
        return view('projects.show',compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project=Project::findOrFail($id);
        return view('projects.edit',compact('project'));
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
        $project=Project::find($id);

        $this->authorize('update',$project);

        $project->title=request('title');
        $project->description=request('description');

        $project->save();
        return redirect('/projects');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project=Project::find($id);
        $this->authorize('update',$project);
        $project->delete();
        return redirect('/projects');
    }
    public function first(){
        $project = Project::first();
        return view('projects.show',compact('project'));
    }
    public function last(){
        $project = Project::all()->last();
        return view('projects.show',compact('project'));
    }
}
