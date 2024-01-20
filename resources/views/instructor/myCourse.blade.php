{{-- @extends('layouts.masterAdmin')
@section('titleBlockadmin', 'Articles Listing')
@section('rightBlockadmin')
    
@endsection --}}
  <style>
    table{
      border-collapse: collapse; width: 100%; border: 1px solid #c5c5c5;
      
    }
    tr th{
      color: white;
      /* border-right: 1px solid #c5c5c5; */
      padding-bottom: 10px;
      padding-top: 10px;
      background-color: rgb(148, 138, 138);
    }
    tr td{
      border-top: 1px solid #c5c5c5;
      padding-left: 40px ;
      padding-right: 40px;
      padding-bottom: 30px;
      padding-top: 30px;
      
    }
    img{
      height: 300px;
      width: 300px;
    }
    p{
      font-size: 20px;
      padding: 20px;
      
    }
    td a{
      color: blue;
      font-weight: bold;
      
    }
    #btnback{
            cursor: pointer;
            color: blue;
            height: 30px;
            width: 100px;
            border-radius: 5px;
            position: absolute;
            right: 100px;
            top: 80px;
            font-size: 20px;
    }
    #btnback:hover{
            color: red;
    }
  </style>
  <x-app-layout>
    <div>
      <p> > All my courses</p>
      <input id="btnback" type="button" value=" >>Back"
            onclick="window.location='/redirects'">
      <table>
        <tr>
          <th>Image</th>
          <th>description</th>
          <th>coursename</th>
          <th>chapter</th>
          <th>created_at</th>
          <th>Add video</th>
          <th>video</th>
          <th>Delete</th>
        </tr>
        @foreach ($post as $post)
          <tr>
            {{-- <td> <img height="300px;" width="300px;" src="post/{{ $post->image }}"> </td> --}}
            <td><img src="{{ asset('post/'.$post->image )}}" alt=""></td>
            <td style="width: 500px;">{{ $post->description }}</td>
            <td>{{ $post->coursename }}</td>
            <td>{{ $post->Number_Chapter }}</td>
            <td>{{ $post->created_at }}</td>
            <td><a href="/instructor/addVideo">Add video</a></td>
            <td><a href="/instructor/myVideo/{{ $post->id }}">Video</a></td>
            <td><a href="/instructor/delete/{{ $post->id }}">Delete</a></td>
           
          </tr>
        @endforeach
        
      </table>
    </div>
  </x-app-layout>
  
