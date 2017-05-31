<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Job;
use App\Bullet;


class JobController extends Controller
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
        return view('job.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $job=new Job;
        $job->company=$request->company;
        $job->title=$request->title;
        $job->startDate=$request->startDate;
        $job->endDate=$request->endDate;
        $job->save();


        $bullets=$request->content;
        if($bullets[0] != null ){
          foreach ($bullets as $key => $bull) {
            $bullet=new Bullet;
            $bullet->job_id=$job->id;
            $bullet->content=$bullets[$key];
            $bullet->delay='0.'.$key.'s';
            $bullet->save();
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
        $job=Job::findOrFail($id);
        return view('job.edit', compact('job'));
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

 


        $job=Job::findOrFail($id);
        $job->company=$request->company;
        $job->title=$request->title;
        $job->startDate=$request->startDate;
        $job->endDate=$request->endDate;
        $job->save();
        $bullets=$request->content;
        if($bullets[0] != null ){
          foreach ($job->bullets as $key => $bull) {
            $bullet=Bullet::findOrFail($bull->id);
            $bullet->job_id=$job->id;
            $bullet->content=$bullets[$key];
            $bullet->delay='0.'.$key.'s';
            $bullet->save();
          }
        }

        $newBulls=$request->newContent;
        if($newBulls[0] != null){
          $bullTotal=Bullet::where('job_id', $id)->count();
          foreach ($request->newContent as $key => $bull) {
            $bull=new Bullet;
            $bull->job_id=$job->id;
            $bull->content=($newBulls[$key]);
            $bull->delay='0.'.($key+$bullTotal).'s';
            $bull->save();
            }
        }

        if($request->dels != null){
          foreach($request->dels as $del){
            $bull=Bullet::findOrFail($del);
            $bull->delete();            
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
        $job = Job::findOrFail($id);
        $job->delete();
        return redirect('/resume');
    }
}
