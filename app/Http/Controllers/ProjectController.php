<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Section;

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
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project=new Project;
        $project->fill($request->all());
        $project->save();


dd($request);

    $titles = $request->sectionTitles;
        if($titles[0]!= null){
          $contents = $request->sectionContents;
          $datas = array_combine($titles, $contents);
        foreach($datas as $title=>$content){ // Loop though one array
           $section = New Section;
           $section->project_id = $project->id;
           $section->title = $title;
           $section->content = $content;
           $section->save();
          }
        }






        return redirect('/');
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

        return view('project.edit',compact('project'));
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
dd($request);
        $project=Project::findOrFail($id);
            $titles = $request->sectionTitles;
        if($titles[0]!= null){
          $contents = $request->sectionContents;
          $datas = array_combine($titles, $contents);
        foreach($datas as $title=>$content){ // Loop though one array
           $section = Section::findOrFail($);
           $section->project_id = $project->id;
           $section->title = $title;
           $section->content = $content;
           $section->save();
          }
        }

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
