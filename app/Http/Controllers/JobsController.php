<?php


namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;

class JobsController extends Controller
{
     // チャート表示用
    public function chart(){
        $jobs=Job::all();
        return view('jobs.jobvote', compact('jobs'));
    }
 
    // 投票結果をデータベースに保存用
    public function vote(Request $request){
        $favorite=Job::where('job', $request->job)->first();
        $favorite->number++;
        $favorite->update();
 
        return back();
     
    } 
}
