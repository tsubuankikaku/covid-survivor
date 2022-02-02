<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Experience;
use App\Like;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ExperiencesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experiences = Experience::all();

        // 体験談一覧ビューでそれを表示
        return view('experiences.index', [
            'experiences' => $experiences,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $experience = new Experience;

        // 体験談投稿ビューを表示
        return view('experiences.create', [
            'experience' => $experience,
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
         $request->validate([
            'content' => 'required|max:255',
        ]);
        
        $request->user()->experiences()->create([
            'content' => $request->content,
        ]);

       
     return redirect()->route('experiences.index');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
            // idの値で体験談を検索して取得
        $experience = Experience::findOrFail($id);
        $like=Like::where('experience_id', $experience->id)->where('user_id', auth()->user()->id)->first();

        // 体験談詳細ビューでそれを表示
        return view('experiences.show', compact('experience', 'like'));
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
         // idの値で体験談を検索して取得
        $experience = Experience::findOrFail($id);
        // 体験談を削除
        $experience->delete();

        //体験談一覧へ
        return redirect('/');
    }
}
