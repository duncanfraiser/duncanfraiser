<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Section;

class ProjectController extends Controller
{



    public function kennykens()
    {
        return view('project.kennykens');
    }


    public function learningcenter()
    {
        return view('project.learningcenter');
    }


    public function stpaul()
    {
        return view('project.stpaul');
    }


    public function ergon()
    {
        return view('project.ergon');
    }



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
    // This block updates the existing project object
        $project=Project::findOrFail($id);
        $project->fill($request->all());
        $project->save();
   
        // $sec=(count($request->sectionExistingTitles));
        // if($sec!= 0){
    // This block updates existing project sections objects
        $ids=$request->sectionExistingIds;
        $titles=$request->sectionExistingTitles;
        $contents=$request->sectionExistingContents;   
        foreach($ids as $key=>$id){
            $section = Section::findOrFail($id);
            $section->project_id=$project->id;
            $section->title = $titles[$key];
            $section->content = $contents[$key];

        $pic = request()->file('img');
        if($pic != null){
        $pic->storeAs('public/img', $pic->getClientOriginalName()); 
        $section->img = $pic->getClientOriginalName();
        }


            $section->save();  
            }
        // }

    // This block stores new project sections objects    
        $addSection=(count($request->sectionTitles));
        if($addSection!= 0){
            $newTitles=$request->sectionTitles;
            $newContents=$request->sectionContents;  
            foreach($newTitles as $key=>$new){
                $section = new Section;
                $section->project_id=$project->id;
                $section->title = $newTitles[$key];
                $section->content = $newContents[$key];
                $section->save();  
                }
            }

        return redirect('/');

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
