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
        <p> > View all posts</p>
        <input id="btnback" type="button" value=" >>Back"
            onclick="window.location='/redirects'">
        <table>
            <tr>
                <th>Uploade by</th>
                <th>Course ID</th>
                {{-- <th>User Name</th> --}}
                <th>Course name</th>
                <th>Description</th>
                <th>Course hours</th>
                <th>Number of Chapter</th>
                {{-- <th>Course type</th> --}}
                <th>View post detail</th>
                <th>Delete post</th>
            </tr>
            @foreach ($post as $post) 
                <tr>
                    <td>{{ $post->username }}</td> 
                    <td>{{ $post->id  }}</td> 
                    <td>{{ $post->coursename }}</td> 
                    <td>{{ $post->description }}</td>
                    <td>{{ $post->coursehours }}</td>
                    <td>{{ $post->Number_Chapter }}</td>
                    {{-- <td>{{ $post->Cac_ID  }}</td> --}}
                    <td><a href="/admin/post/{{ $post->id }}">View detail</a></td>
                    <td><a href="/admin/post/delete/{{ $post->id }}">Delete</a></td>
                </tr> 
          @endforeach
        </table>
    </form>
</x-app-layout>