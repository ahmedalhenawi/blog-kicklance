<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        $users = DB::table('users')->get();
        return view('user.index' , compact('users'));
    }

    public function create(){
        return view('user.create');
    }

    public function store(Request $request){
        $user = DB::table('users')->insert([
            'name' => $request->name , 
            'email' => $request->email , 
            'password' =>$request->password,
            'created_at' => now(),
            'updated_at' => now()
    ]);
        return redirect()->route('user.create');
    }


    public function edit($id) {
        $user = DB::table('users')->where('id' , $id)->first();
        return view('user.edit' , compact('user'));
    }

    public function update(Request $request , $id){

        $user = DB::table('users')->where('id' , $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'updated_at' => now()
        ]);

        return redirect()->route('user.index');
    }

    public function destroy($id){
        $user = DB::table('users')->delete($id);
        return redirect()->route('user.index');
    }

}