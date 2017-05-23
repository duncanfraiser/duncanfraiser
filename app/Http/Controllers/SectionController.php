<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Section;

class SectionController extends Controller
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
    public function create(Request $request)
    {
        $projectId=$request->projectId;
        // dd($projectId);
        
        return view('section.create', compact('projectId'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $section=new Section;
        $section->project_id=$request->projectId;

        $section->title=$request->title;

        $section->content=$request->content;

        $section->save();
        return redirect('project/'.$section->project_id);
        
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
        $section=Section::findOrFail($id);
        return view('section.edit', compact('section'));
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
        $section=Section::findOrFail($id);
        $section->title=$request->title;
        $section->content=$request->content;
        $pic = request()->file('img');
        if($pic != null){
            $pic->storeAs('public/img', $pic->getClientOriginalName()); 
            $section->img = $pic->getClientOriginalName();
        }
        $section->save();






        return redirect('/project/'.$section->project_id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $section = Section::findOrFail($id);

        $section->delete();
        return redirect('/project/'.$section->project_id);
    }
}
