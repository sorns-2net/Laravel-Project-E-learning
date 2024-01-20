<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titleBlockadmin')</title>
    <style>
        *{ 
            margin: 0; padding: 0; box-sizing: border-box;
        }
        body{

            font-family: sans-serif; 
            line-height: 20px; 
            color: #4d4d4d;
        }
        #Wrapper{ 
          display: flex;
        }
        #left{
            width: 20%; 
            background-color: #290907; 
            min-height: 850px;
            
        }
        #left nav ul li{
            list-style-type: none;
            border-bottom: 1px solid #fff;
            
        }
        #left nav ul li a{
            display: block; 
            color: #fff; 
            text-decoration: none; 
            font-size: 20px;
            font-weight: bold; 
            letter-spacing: 1px; 
            padding: 15px 30px;
        }
        #left nav ul li a:hover{
            background-color: #EFE9E1; 
            color:  rgb(104, 98, 98); 
        }
        #left nav ul li:first-child{
            font-size: 35px;
            color: #F1BD78;
            letter-spacing: 3px;
            padding: 30px;
            background-color: #57473A;
        }
        #left nav ul li span:first-child{
            font-size: 15px;
            color: white;
            background-color: rgb(104, 98, 98);
            padding: 3px;
        }
        #right{
            width: 80%; 
            background-color: #EFE9E1; 
            min-height: 400px; 
            
        }
        #right h1{
           text-align: center;
           padding: 30px;
        }
        #right h1 span{
           font-size: 50px;
           color: #57473A;
           animation: glow 30s ease-in-out infinite;  
        }
        @keyframes glow{
    0%, 100%{
        color: #ffffff;
        text-shadow: 0 0 5px #73A1B2, 0 0 10px #73A1B2, 0 0 15px #73A1B2;
    }
    10%, 90%{
        color:#57473A ;
        text-shadow: none;
    }
}

        #right table{
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #fff;

        }
        #right tr th{
            background:#57473A;
            color: #fff;
            padding-top: 8px;
            padding-bottom: 8px;
            height: 40px;
            border-left: 1px solid #fff;
        }
        #right tr td{
            background: #73A1B2;
            color: #fff;
            padding: 6px;
            border-bottom: 1px solid white;
            border-left: 1px solid #fff;
        }
        #contant{
            display: grid;
            grid-template-columns: auto auto auto;
            gap: 3%;
            margin-top: 50px;
            margin-left: 3%;
            margin-right: 3%;
        }
        #contant .box{
            background-color: #73A1B2;
            color: #fff;
            height: 200px;
            padding: 10px;
            border: 1px solid #57473A;
        }
        #toolbar{
            background-color: #73A1B2;
            border: 1px solid white;
            padding: 10px;
            text-align: right;
        }
        #toolbar input[type=button], #toolbar input[type=submit]{
            color: #57473A;
            background-color: rgb(255, 255, 255);
            text-decoration: none;
            padding: 8px 18px;
            font: 17px sans-serif;
            border: none;
        }
        #toolbar input[type=button]:hover, #toolbar input[type=submit]:hover{
            background-color: #F1BD78;
            color: #57473A;
            cursor: pointer;
        }
        #right form input[type=text], #right form textarea{
            width: 100%;
            font: 16px sans-serif;
            padding: 8px;
        }
        #right form label{
            font: 20px sans-serif;
            padding: 8px;
        }
        #right form input[type=checkbox]{
            width: 20px;
            height: 20px;
        }
        
    </style>
</head>
<body>
    <div id="Wrapper">

        <div id="left">

            <nav>
                <ul>
                    <li>Menu <span>Please select this</span></li>
                    <li><a href="/">Home</a></li>
                    <li><a href="/instructor/createCourse">Add New Course</a></li>
                    <li><a href="/instructor/myCourse">My Course</a></li>
                    
                </ul>
            </nav>
    
        </div>
        
        <div id="right">
            @yield('rightBlockadmin')
        </div>
            
    </div>
    
</body>
</html>