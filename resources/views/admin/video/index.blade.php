{{-- <div class="Content">
    <form action="" method="post">
        @csrf
        
        @foreach ($video as $video )
            
                <div class="course">
                        <h2>{{ $video->coursename }}</h2>
                        <h2>{{ $video->post_id }}</h2>
                        <h2>{{ $video->link_video }}</h2>
                        <h2>{{ $video->created_at }}</h2>
                        <h2>{{ $video->updated_at }}</h2>
                </div>
            
            @endforeach
        </div>
    </form>
</div> --}}

<x-app-layout>
    <style>
        table{
            border-collapse: collapse; width: 95%; border: 1px solid #c5c5c5;
            margin-left: 50px;
            margin-right: 50px; 
            border-radius: 5px;
        }
        tr th{
            background-color:rgb(221, 233, 233);
            /* border: 1px solid #c5c5c5; */
            height: 70px;
            text-align: center;
            font-weight: bold;
            font-size: 20px;
            border-radius: 5px;
        }   
        tr td{
            /* background: #6e6e6e; color: #fff;  */
            border-top: 1px solid #c5c5c5;
            height: 50px;
            text-align: center;
            border-radius: 5px;
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
        p{
            font-size: 20px;
            padding: 20px;
      
        }
        td a{
            color: rgb(52, 52, 255);
            font-weight: bold;
      
        }
    </style>
    <form action="" method="POST">
        
        @csrf
        <p> > View all video</p>
        <input id="btnback" type="button" value=" >>Back"
            onclick="window.location='/redirects'">
        <table>
            <tr>
                <th>Course name</th>
                <th>Link Video</th>
                <th>created_at</th>
                <th>updated_at</th>
                <th>View post detail</th>
                <th>Delete post</th>
            </tr>
            @foreach ($video as $video) 
                <tr>
                    <td>{{ $video->coursename }}</td> 
                    <td>{{ $video->link_video }}</td> 
                    <td>{{ $video->created_at }}</td> 
                    <td>{{ $video->updated_at }}</td>
                    {{-- <td>{{ $post->Cac_ID  }}</td> --}}
                    <td><a href="/admin/post/{{ $video->id }}">View detail</a></td>
                    <td><a href="">Delete</a></td>
                </tr> 
          @endforeach
        </table>
    </form>
</x-app-layout>