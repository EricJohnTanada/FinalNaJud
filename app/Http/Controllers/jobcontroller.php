<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;


class jobcontroller extends Controller
{
    public function indexs()
    {
        $data= job::all();
        return view('/job/index',['jobs'=>$data]);
    }

    
    // public function create()
    // {
    //     return view('job.create');
    // }

    
    public function store(Request $req)
    {
        $newJob = new job;
        $newJob->job=$req->job;
        $newJob->description=$req->description;
        $newJob->requirements=$req->requirements;
        $newJob->save();
        
            return redirect('front');
                
     }

    
    public function show($id)
    {
        $data= job::find($id); 
        return view('job\edit',['data'=>$data]);
    }

    
//     public function edit(Job $job)
//     {
//         return view('job.edit',compact('Job'));
//     }

    
    function update(Request $req)
    {

        $data=job::find($req->id);
        $data->job=$req->job;
        $data->description=$req->description;
        $data->requirements=$req->requirements;
        $data->save();
        return redirect('front');

        
       
        
    }

    public function delete($id)
    {
        $data=job::find($id);
        $data->delete();

        return redirect('front');
    }
 }
