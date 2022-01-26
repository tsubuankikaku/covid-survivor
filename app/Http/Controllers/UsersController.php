<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Experience;
use App\Like;
use App\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;


class UsersController extends Controller
{
   public function index()
    {
         $data = [];
        if (\Auth::check()) {
            // 認証済みユーザ（閲覧者）を取得
            $user = \Auth::user();
           
            $data = [
                'user' => $user,
             
            ];
        }

        // Welcomeビューでそれらを表示
        return view('welcome', $data);
    }
    
     public function edit($id)
    {
       $user = User::findOrFail($id);

        return view('users.edit', [
            'user' => $user,
        ]);
    }
     public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'nullable',
            'email' => 'required'
        ]);
        
        $image = $request->file('image');
        $path = null;
        $data = array();
    
        // 画像が投稿された場合
        // やりたいこと
        // 1. 前の画像をs3から削除する
        // 1-a. 前の画像がデフォルト画像の場合は、削除しない
        // 2. 投稿された画像をs3にアップロードする
        // 3. s3のパスでユーザーを更新する
        
        // 画像が投稿されなかった場合
        // 1. 前の画像のままの状態でユーザーを更新する
        
        $user = User::findOrFail($id);
        
        //dd($request->hasFile('image'));
        if ($request->hasFile('image')) {
            \Storage::disk('s3')->delete($user->image);
            $path = $image->store('users', 's3');
        }else if($request -> hasFile('asset/no_image.jpg')){
            $path = \Storage::disk('s3')->putFile('/', $data['image']);
        }
        
        $user-> name = $request->name;
        $user-> age = $request->age;
        $user-> region =$request->region;
        $user-> email = $request->email;
        $user->password = Hash::make($request->password);
        if ($path != null) {
            $user->image = $path;
        }
       
        $user->save();
 
    return redirect('/');
    }
}
