<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tool;
use App\Landing;

class ToolController extends Controller
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
        $dirs = [
            'fadeInLeft' => 'Fade In Left',
            'fadeInRight' => 'Fade In Right'
        ];

        $seconds = [
            '0.0s' => '0.0s',
            '0.1s' => '0.1s',
            '0.2s' => '0.2s',
            '0.3s' => '0.3s',
            '0.4s' => '0.4s',
            '0.5s' => '0.5s',
            '0.6s' => '0.6s',
            '0.7s' => '0.7s',
            '0.8s' => '0.8s',
            '0.9s' => '0.9s'
        ];

        return view('tool.create', compact('seconds', 'dirs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $tool=new Tool;
        $tool->landing_id=1;
        $tool->name=$request->name;
        $tool->delay=$request->delay;
        $tool->direction=$request->direction;
        $tool->save();

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
        $dirs = [
            'fadeInLeft' => 'Fade In Left',
            'fadeInRight' => 'Fade In Right'
        ];

        $seconds = [
            '0.0s' => '0.0s',
            '0.1s' => '0.1s',
            '0.2s' => '0.2s',
            '0.3s' => '0.3s',
            '0.4s' => '0.4s',
            '0.5s' => '0.5s',
            '0.6s' => '0.6s',
            '0.7s' => '0.7s',
            '0.8s' => '0.8s',
            '0.9s' => '0.9s'
        ];
        $landing=Landing::findOrFail(1);
        $tools=Tool::orderBy('name')->get();
        return view('tool.edit',compact('landing','tools','dirs','seconds'));
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
        foreach ($request->name as $key => $tool) {
          $tool=Tool::findOrFail($request->ids[$key]);
          $tool->landing_id=1;
          $tool->name=($request->name[$key]);
          $tool->delay=($request->delay[$key]);
          $tool->direction=($request->direction[$key]);
          $tool->save();
        }

        if($request->dels != null){
          foreach($request->dels as $del){
            $tool=Tool::findOrFail($del);
            $tool->delete();            
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
        //
    }
}
