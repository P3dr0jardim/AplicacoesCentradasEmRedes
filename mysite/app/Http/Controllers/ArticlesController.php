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
        $projects=Project::all();
        $articles=Articles::all();
        return view('articles.index',['articles'=>$articles]);
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
    public function createArticle()
    {
        return view('articles.createArticle');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store() # recebe do form e guarda os dados na BD
    {
        $validated = request()->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'content' => 'required'
            
        ]);
        if(request('featured')=='on') {
            $article->featured=1;
            $article->save();
        Project::create(request(['title', 'content', 'featured']));  # apenas quando mesmo nome usado nas variaveis da view e na base de dados
        
        Project::create([ # atalho create: obriga a usar o campo fillable ou guarded no model App\Project.php
            'title' => request('title'),
            'content' => request('content'),
            'featured'=>request('featured')
        ]);

        return redirect('/articles');
        
        
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
        $project->delete();
        return redirect('/projects');
    }
}
