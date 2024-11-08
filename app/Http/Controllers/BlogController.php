<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index(){
        $blogs = DB::table('blogs')->get();
        return view('blog.index' , compact('blogs'));
    }

    public function create(){
        $blog_sections = DB::table('blog_sections')->get();
        return view('blog.create' , compact('blog_sections'));
    }

    public function store(Request $request){

        $blog = DB::table('blogs')->insert([
            'name' => $request->name , 
            'blog_section_id' => $request->blog_section_id , 
            'created_at' => now(),
            'updated_at' => now()
    ]);
        return redirect()->route('blog.create');
    }


    public function edit($id) {
        $blog_sections = DB::table('blog_sections')->get();
        $blog = DB::table('blogs')->where('id' , $id)->first();
        return view('blog.edit' , compact('blog' , 'blog_sections'));
    }

    public function update(Request $request , $id){

        $blog = DB::table('blogs')->where('id' , $id)->update([
            'name' => $request->name,
            'blog_section_id' => $request->blog_section_id,
            'updated_at' => now()
        ]);

        return redirect()->route('blog.index');
    }

    public function destroy($id){
        $blog = DB::table('blogs')->delete($id);
        return redirect()->route('blog.index');
    }

}
