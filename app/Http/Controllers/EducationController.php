<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Education;
use App\Degree;

class EducationController extends Controller
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
        return view('education.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request,[
        //     'school' => 'required',
        //     'degree' => 'required',

        // ]);


        $education=new Education;
        $education->school=$request->school;
        $education->kind=$request->kind;
        $education->save();

        $degrees=$request->degrees;
        if($degrees[0] != null ){
          foreach ($degrees as $key => $deg) {
            $degree=new Degree;
            $degree->education_id=$education->id;
            $degree->content=$degrees[$key];
            $degree->delay='0.'.($key+3).'s';
            $degree->save();
          }
        }


        return redirect('/resume');
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
        $education=Education::findOrFail($id);
        return view('education.edit', compact('education'));
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

        $education=Education::findOrFail($id);
        $education->school=$request->school;
        $education->kind=$request->kind;
        $education->save();


        $degrees=$request->degrees;
        if($degrees[0] != null ){
          foreach ($education->degrees as $key => $degree) {
            $degree=Degree::findOrFail($degree->id);
            $degree->education_id=$education->id;
            $degree->content=$degrees[$key];
            $degree->delay='0.'.($key+3).'s';
            $degree->save();
          }
        }

        $newDegrees=$request->newDegrees;
                if($newDegrees[0] != null){
          $degreeTotal=Degree::where('education_id', $id)->count();
          foreach ($request->newDegrees as $key => $deg) {
            $deg=new Degree;
            $deg->education_id=$education->id;
            $deg->content=$newDegrees[$key];
            $deg->delay='0.'.($key+3+$degreeTotal).'s';
            $deg->save();
            }
        }

        if($request->dels != null){
          foreach($request->dels as $del){
            $deg=Degree::findOrFail($del);
            $deg->delete();            
          }
        } 
        
        return redirect('/resume');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $education = Education::findOrFail($id);
        $education->delete();
        return redirect('/resume');
    }
}
