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
            'image' => 'nullable',
        ]);
        
        
        $image = $request->file('image');
        $path = $request->image;
        $data = $request->image;
        
        //dd($request->hasFile('image'));
        if ($request->hasFile('image')) {
        \Storage::disk('s3')->delete($path);
        $path = $image->store('users', 's3');
        
        }
        
      
        
        $user = User::findOrFail($id);
        
        $user-> name = $request->name;
        $user-> age = $request->age;
        $user->update(['image' => $path]);
        $user-> region =$request->region;
        $user-> email = $request->email;
        $user->password = Hash::make($request->password);
        
       
        $user->save();
 
    return redirect('/');
    }
}
