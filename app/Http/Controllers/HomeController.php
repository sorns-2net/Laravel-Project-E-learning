<?php

namespace App\Http\Controllers;

use App\Models\CourseCategory;
use App\Models\Instructors;
use App\Models\posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Psy\VersionUpdater\Installer;
use Illuminate\Support\Facades\DB;
use App\Models\videos;

class HomeController extends Controller
{
    public function index(){
        $role = Auth::user()->role;
        
        if($role=='1'){
            return view('admin');
        }
        if($role=='2'){
            return view('instructor');
        }
        else
            return view('dashboard');
    }
    public function home(){
        $post =Posts::all();
        return view('Home.index', compact('post'));
    }

    public function createCourse(){
        $CourseCategorys = CourseCategory::all();
        return view('instructor.createCourse', compact('CourseCategorys'));
    }
    public function myCourse(){
        $username = Auth::user()->name ;
        $post =Posts::where('username', '=', $username)->get();
       
        return view('instructor.myCourse', compact('post'));
    }
    public function userinfor(){
        return view('user.userinfor');
    }
    public function becometoinstructor(){
        return view('user.becometoinstructor');
    }
    
    public function upload(Request $request){
        
        $data = new posts();
        $data->username=Auth::user()->name;
        $data->description=$request->description;
        $image = $request->image;
        if($image){
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('post',$imagename);

        /*image part end here*/
        
        $data->image=$imagename;
        }
        $data->coursename=$request->coursename;
        $data->coursehours=$request->coursehours;
        // $data->courseprice=$request->courseprice;
        $data->Number_Chapter=$request->Number_Chapter;
        
        $data->Cac_ID = $request->input('Cac_ID');

        // $request->validate([
        //     'coursename'=>'required|min:5|max:60000|regex:[a-zA-Z]',
        // ],[
        //     "coursename.required" => "Please enter course name",
        //     'coursename.min' => "The course name field must be at least 5 characters.",
        // ]);

        $data->save();
        return redirect()->back();


    }

    public function showDetail($id){
        // return view('Home.show');
        $data = Posts::find($id);
        return view('Home.showDetail', [ 'post'=>$data ]);
    }
    public function viewVideo($id){
        // $link = DB::table('videos')->where('videos.id', $id)->select('videos.*')->get();
        $data = DB::table('videos')
        ->join('posts','videos.post_id',"=",'posts.id')
        ->where('videos.post_id',$id)
        ->get();
        return view('Home.viewVideo', ['video'=>$data]);

    }
    public function detail(string $id)
    {
        $data = DB::table('videos')
        ->join('posts','videos.post_id',"=",'posts.id')
        ->where('videos.post_id',$id)
        ->get();
        return view('instructor.myVideo', ['video'=>$data]);
    }
}
