<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;

class JobsController extends Controller
{
    // チャート表示用
    public function chart(){
        $jobs = Job::all();
        return view('job.answer', compact('jobs'));
    }
    
    // アンケート結果をデータベースに保存用
    public function answer(Request $request){
        
        $favorite = Job::where('job', $request->job)->first();
        $favorite ->number++;
        $favorite ->update();
 
        return back();
    }    
}
