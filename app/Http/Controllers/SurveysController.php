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
        return view('surveys.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(array $data)
    {
       /* $survey = new Survey;    
       
        return view('surveys.create', [
            'survey' => $survey,
        ]); 
      
      return Survey::create([
            'job' => $data['job'],
            'route' => $data['route'],
            'symptom' => $data['symptom'],
            'level' => $data['level'],
            'after_effect' => $data['after_effect'],
            'symptom_after' => $data['symptom_after'],
            'reaction' => $data['reaction'],
            'anything' => $data['anything'],
            ]);*/
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
         $survey = Survey::findOrFail($id);
        

        // 体験談詳細ビューでそれを表示
        return view('surveys.show', compact('survey'));
    
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
