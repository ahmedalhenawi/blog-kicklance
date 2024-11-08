<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogSectionController extends Controller
{
    public function index(){
        $blog_sections = DB::table('blog_sections')->get();
        return view('blog_section.index' , compact('blog_sections'));
    }

    public function create(){
        return view('blog_section.create');
    }

    public function store(Request $request){
        $blog_section = DB::table('blog_sections')->insert([
            'name' => $request->name , 
            'description' => $request->description , 
            'created_at' => now(),
            'updated_at' => now()
    ]);
        return redirect()->route('blog_section.create');
    }


    public function edit($id) {
        $blog_section = DB::table('blog_sections')->where('id' , $id)->first();
        return view('blog_section.edit' , compact('blog_section'));
    }

    public function update(Request $request , $id){

        $blog_section = DB::table('blog_sections')->where('id' , $id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'updated_at' => now()
        ]);

        return redirect()->route('blog_section.index');
    }

    public function destroy($id){
        $blog_section = DB::table('blog_sections')->delete($id);
        return redirect()->route('blog_section.index');
    }

}