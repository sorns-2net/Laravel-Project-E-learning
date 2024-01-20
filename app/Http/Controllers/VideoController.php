<?php

namespace App\Http\Controllers;

use App\Models\posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\videos;


class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $data = DB::table('videos')
        ->join('posts','videos.post_id',"=",'posts.id')
        ->where('videos.post_id',$id)
        ->get();
        return view('instructor.myVideo', ['video'=>$data]);
    }
    public function allVideo()
    {
        $data = DB::table('videos')
        ->join('posts','videos.post_id',"=",'posts.id')
        ->get();
        return view('admin.video.index', ['video'=>$data]);
    }
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
    public function addVideo(){
        $video = videos::all();
        return view('instructor.addVideo', compact('video'));
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
        
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
    public function upload(Request $request)
    {
        $data = new videos();
        $data->link_video = $request->link_video;
        $data->title = $request->title;
        
        $data->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $video = videos::find($id)->delete();
        
        return redirect('instructor/myCourse');
    }
}
