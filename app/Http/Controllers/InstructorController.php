<?php

namespace App\Http\Controllers;

use App\Models\Instructors;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    public function upload(Request $request){

        $data = new instructors;
        $data->email=$request->email;
        $data->first_name=$request->first_name;
        $data->last_name=$request->last_name;
        $data->phone_number=$request->phone_number;
        $data->company_name=$request->company_name;
        $data->job_title=$request->job_title;
        $data->countryofresidence=$request->countryofresidence;

        $data->save();
        return view('instructor');

    }
}
