{{-- @extends('layouts.masterAdmin')
@section('titleBlockadmin', 'Articles Listing')
@section('rightBlockadmin') --}}
<style>
    #btnback{
      cursor: pointer;
      color: red;
      height: 30px;
      width: 100px;
      border-radius: 5px;
      position: absolute;
      right: 100px;
      top: 80px;
      font-size: 20px;
    }
</style>
    <x-app-layout>
        <link rel="stylesheet" href="styleforuserinfo.css">
        <input id="btnback" type="button" value=" >>Back"
            onclick="window.location='/redirects'">
        <div id="uploadCourse" style="width: 40%;
                                        padding: 30px;
                                        border-right: 1px solid #57473A;
                                        align-items: center;
                                        justify-content: center;
                                        /* padding-left: 30%; */
                                        position: relative;
                                        left: 10%;" >

                <label for="" style="font-size: 50px; font-weight: bold;
                    color: #57473A">Add a new courses</label>
                <br><br>
                <form action="{{ url('/instructor/createCourse') }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    <div>
                        <label for="">Course Name</label>
                        <br>
                        <input type="text" name="coursename" value="{{ old('coursename') }}" id="" style=" width: 500px;border-radius: 5px;">
                        <br>
                        @error('coursename')
                        <span style="color: red">{{ $message }}</span>
                        @enderror
                    </div>
                    <br>
                    <div>
                        <label for="">Description</label>
                        <br>
                        <textarea name="description" id="description" cols="40" rows="6" style="width: 500px; border-radius: 5px;">{{ old('description') }}</textarea>
                    </div>
                    <br>
                    
                    <br>
                    <div>
                        <label for="">Course Hours</label>
                        <br>
                        <input type="text" name="coursehours" value="{{ old('coursehours') }}" id="" style="width: 500px; border-radius: 5px;">
                    </div>
                    <br>
                    <div>
                        <label for="">Chapter</label>
                        <br>
                        <input type="text" name="Number_Chapter" value="{{ old('Number_Chapter') }}" id="Number_Chapter" style=" width: 500px; border-radius: 5px;">
                    </div>
                    <br>
                    <div>
                        <label for="Cac_ID">Choose Course Type:</label>
                        <br>
                        <select name="Cac_ID" id="Cac_ID" style="width: 500px; font-size: 20px;border-radius: 5px;">
                            {{ old('Cac_ID') }}
                            @foreach ($CourseCategorys as $CourseCategory)
                                <option value="{{ $CourseCategory->id }}">{{ $CourseCategory->course_category_name }}</option>
                            @endforeach
                        </select>
                        
                        
                    </div>
                    <br>
                    <div>
                        <label for="">Upload Image</label>
                        <input type="file" name="image" value="{{ old('image') }}">
                    </div>
                    <br><br>
                    <div>
                        <input type="submit" value="Submit" id="btnsubmit" style="background-color:#1f3053 ;
                                                                                    width: 70%;
                                                                                    height: 4vh;
                                                                                    cursor: pointer;
                                                                                    border-radius: 5px;
                                                                                    color: white;" >
                    </div>
                    
                </form>
           
        </div>
    </x-app-layout>
{{-- @endsection --}}