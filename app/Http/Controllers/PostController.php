<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseCategory;
use App\Models\posts;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post =Posts::all();
        return view('admin.Post.index', compact('post'));
    }
    // public function delete(string $id){
    //     $post = Posts::find($id);
    //     $post->trash=1;
    //     $post->save();

    //     return redirect('admin/Post/index');
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Posts::find($id);
        return view('admin.post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Posts::find($id);
        $post->delete();
        
        return redirect('admin/post/index');
    }

    public function search(Request $request){
        // return $request->input();
         $data = posts::where('coursename','like','%'. $request->input('query') .'%')->get();
         return view('Home.search', ['post'=>$data]);
    }

    
}
