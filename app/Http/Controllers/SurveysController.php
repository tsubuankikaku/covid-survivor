<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Survey;


class SurveysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $surveys = Survey::all();

        // アンケート結果ビューでそれを表示
        return view('surveys.index', [
            'surveys' => $surveys,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     
      $survey = new Survey;
      
       return view('surveys.create', [
            'survey' => $survey,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $survey = new Survey;
        
        $survey->job = $request->job;
        $survey->route = $request->route;
        $survey->symptom = $request->symptom;
        $survey->level = $request->level;
        $survey->duration = $request->duration;
        $survey->after_effect = $request->after_effect;
        $survey->symptom_after = $request->symptom_after;
        
        $survey->save();

        
        return view('surveys.index');
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
        //
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
        //
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
