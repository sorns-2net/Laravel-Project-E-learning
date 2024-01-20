<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>Detail</title>
</head>
<style>
*{
    margin: 0;
    padding: 0;
    
}
nav {
    
    width: 100%;
    height: 70px;
}
ul{
    float: right;
    margin-right: 20px;
    line-height: 70px;
}
nav ul li{
    display: inline-block;
}
nav ul li a{
    text-decoration: none;
    color: rgb(121, 37, 37);
    font-weight: bold;
    margin-right: 30px;
}
.logo{
    line-height: 70px;
    font-weight: bold;
    font-size: 25px;
    left: 5%;
    position: relative;
    margin-right: 17%;
}
.logo span{
    color: skyblue;
    font-size: 40px;
}

#txtsearch{
    width: 700px;
    border: 1px solid hsl(308, 52%, 65%);
    height: 40px;
    border-radius: 50px;
    padding-left: 30px;
    padding-right: 30px;
}
#btnsearch{
    width: 70px;
    height: 40px;
    border-radius: 50px;
    border: 1px solid hsl(308, 52%, 65%);
    background-color: white;
    

}
#btnsearch:hover{
    background-color: hsl(308, 52%, 65%);
    color: white;
}
.Content{
    height: 900px;
    background: linear-gradient( rgb(71, 111, 184), hsl(308, 52%, 65%));
    padding-top: 7%;
}
img{
    width: 370px;
    height: 250px;
    border-radius: 5px;
}
label{
    font-size: 18px;
}
#btnstartlearn{
    width: 360px;
    height: 40px;
    border: none;
    font-size: 18px;
    background-color: white;
    margin: 10px 5px;
    color: hsl(308, 58%, 59%);
    border-radius: 5px;
}
#btnstartlearn:hover{
    background-color: hsl(308, 40%, 29%);

    color: hsl(0, 0%, 100%);
}
#btnbacktoHome{
    font-size: 18px;
    width: 360px;
    height: 40px;
    margin: 10px 5px;
    border: 1px solid rgb(71, 111, 184);
    background: none;
    color: white;
    border-radius: 5px;
}
#btnbacktoHome:hover{
    border: 1px solid rgb(184, 71, 71);
}
p{
    color: white;
    font-size: 18px;
}


</style>
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
            <form action="" method="post">
                @csrf
                
                <div style="margin-left: 25%; margin-right: 25%; width: 50%; 
                            border: 1px solid rgb(255, 255, 255); height: 600px; border-radius: 5px;">
                    <div style="background-color: rgba(174, 185, 204, 0.3); 
                            width: 380px; height: 600px; padding: 5px; border-right: 1px solid white;
                            border-radius: 5px; float: left;">
                        <img src="{{ asset('post/'.$post->image )}}" alt=""> <br>
                        
                        <h2 style="color: white;">{{ $post->coursename }}</h2>
                        <label for="" style="font-size: 20px;">Post by &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                            <span style="color: white; font-size: 19px;
                                                        font-family: sans-serif; letter-spacing: 0.1ch;">
                                        {{ $post->username }}
                            </span> 
                        </label>
                        <label for="">Course detail &nbsp;: <span style="color: white; font-size: 17px;
                                                         font-family: sans-serif; letter-spacing: 0.1ch;">
                            {{ $post->description }}</span> 
                        </label>
                        
                        
                        <input type="button" value="Start learning now!!!"
                            onclick="window.location='/viewVideo/{{ $post->id }}'" id="btnstartlearn">

                        <input type="button" value="Back to home page"
                            onclick="window.location='/'" id="btnbacktoHome">

                    </div>

                    <div style="background:none;
                             height: 600px; float: right; margin-left: 400px;
                             margin-top: -650px; margin-right: 20px;
                        ">

                        <div id="fortext">
                            <br><br>
                            <h1 style="font-size: 40px; color: white;">Get start now</h1>
                            <br>
                            <p style="font-size: 20px;">See why leading organizations choose BlogSS12 Business as their destination for employee learning.</p>
                            
                            <h2 style="font-size: 3vh;color: white;">In your demo, learn more about:</h2>
                            <br>
                            <p> &nbsp;+ &nbsp; Excepteur sint occaecat cupidatat non proident mollit anim id est laborum. laborum.</p>
                            <br>
                            <p> &nbsp;+ &nbsp; Fresh content taught by global instructors in 15 languages  for any learning style</p>
                            <br>
                            <p> &nbsp;+ &nbsp; Actionable learning insights and admin functionality</p>

                        </div>
                    </div>
                     
                    
                </div>

                
                
            </form>
            
        </div>
        
    </div>
</body>
</html>