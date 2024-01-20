<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>Home Blog</title>
</head>
<body>
    
    <div class="firstbody">
        <nav>
            <label class="logo"><span>Blog</span>SS12</label>
            <form action="/search" style="position: absolute; bottom: 880px; left: 510px;">
                <input type="text" name="query" id="txtsearch" placeholder="Search for a course ">
                <button type="submit" id="btnsearch">Search</button>
            </form>
            <ul>
                
                <li>
                    <a href=""> Web Development </a>
                </li>
                <li>
                    <a href=""> Design </a> 
                </li>
                @if (Route::has('login'))
                    @auth
                    <li>
                        <a href="{{ url('/redirects') }}" class="btn btn-success" style="color: hsl(219, 44%, 50%); 
                        font-weight: bold; size: 20px; border: 1px solid  hsl(308, 52%, 65%);
                        background-color: white;">{{ Auth::user()->name }}</a>
                    </li>
                    @else    
                <li>
                    <a href="{{ route('register') }}" class="btn btn-success" style="background-color: white; color: black; font-weight: bold">Register</a>
                </li>
                <li>
                    <a href="{{ route('login') }}" class="btn btn-primary" style="background-color: white; color: black; font-weight: bold">Login</a>
                </li>
                    @endauth
                @endif
            </ul>
        </nav>
    
        <div class="Content">
            <img src="E-learning.png" alt="" class="imgL">
            <div class="wel_com">
                <h3>Welcome to SS12 E-Learning!</h3>
                
            </div>
        </div>
    </div>
    
<div class="menu">
    <div id="wrap">
        <div style="border-bottom: 1px solid black; margin-bottom: 50px;">
            <h3 style="margin-bottom: 40px; color: rgb(95, 92, 92);">>>All the course  <<</h3>
        </div>
       
            @foreach ($post as $post )
            
                <div class="course">
                    <img src="post/{{ $post->image }}" alt="">
                        <h2>{{ $post->coursename }}</h2>
                        {{-- <p>
                            {{ $post->description }}     
                        </p> --}}
                        {{-- <h6>{{ $post->courseprice }}$</h6>  --}}
                        <div class="detail">
                            <a href="showDetail/{{ $post->id }}">View more detail...</a>
                        </div>
                        
                        
                </div>
            
            @endforeach
    
    </div>
</div>
    <br><br>
</body>
</html>