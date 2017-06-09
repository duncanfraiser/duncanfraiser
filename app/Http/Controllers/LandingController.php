<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Landing;
use App\Tool;
use App\Project;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $landing=Landing::findOrFail(1);
        $projects=Project::where('home',1)->get();
        $delays=['.3s','.5s','.7s','.9s'];


        return view('landing.index', compact('landing', 'projects', 'delays'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

        $landing=Landing::findOrFail($id);
        $projects=Project::where('home',1)->get();
        $delays=['.3s','.5s','.7s','.9s'];
        return view('landing.edit', compact('landing', 'dirs', 'seconds', 'projects','delays'));
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
        // dd($request);

        $landing = Landing::findOrFail($id);
        // if($request->img != ""){
        // $pic = request()->file('img');
        // $pic->storeAs('public/img', $pic->getClientOriginalName());
        // $grocery->img = $pic->getClientOriginalName();
        // }
        $landing->about = $request->about;
        $landing->serv = $request->serv;
        $landing->db = $request->db;
        $landing->frontend = $request->frontend;
        $landing->backend = $request->backend;
        $landing->save();

        foreach ($request->name as $key => $tool) {
          $tool=Tool::findOrFail($request->ids[$key]);
          $tool->landing_id=$landing->id;
          $tool->name=($request->name[$key]);
          $tool->delay=($request->delay[$key]);
          $tool->direction=($request->direction[$key]);
          $tool->save();
        }

        if($request->newName != null){
          foreach ($request->newName as $key => $tool) {
            $tool=new Tool;
            $tool->landing_id=$landing->id;
            $tool->name=($request->newName[$key]);
            $tool->delay=($request->newDelay[$key]);
            $tool->direction=($request->newDirection[$key]);
            $tool->save();
            }
        }



        if($request->dels != null){
          foreach($request->dels as $del){
            $tool=Tool::findOrFail($del);
            $tool->delete();            
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
