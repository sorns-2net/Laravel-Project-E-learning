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
    </style>
    <form action="" method="POST">
        
        @csrf
        <p> > View all video</p>
        <input id="btnback" type="button" value=" >>Back"
            onclick="window.location='/'"> 
            @foreach ($video as $video) 
            <div style="width: 50%; margin-left: 30%;">
                <label for="" style="font-size: 20px;">{{ $video->title }}</label> 
                <br><br>
                <iframe src="{{ $video->link_video }}" width="560" height="315" frameborder="0" allowfullscreen></iframe>
                <br><br>
            </div>
                
                
            @endforeach
       
    </form>
</x-app-layout>