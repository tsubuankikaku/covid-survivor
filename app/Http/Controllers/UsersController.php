<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\User;

use Illuminate\Support\Facades\Auth;


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
        
        
        $user = User::findOrFail($id);
        
        $user-> name = $request->name;
        $user-> age = $request->age;
        
        $user-> region =$request->region;
        $user-> email = $request->email;
        $user->password = $request->password;
        
        if ($request->hasFile('image')) { // リクエストにファイルが存在する場合
    $user->image = $request->image;
}
       
       
        $user->save();
 
    return redirect('/');
    }
}
