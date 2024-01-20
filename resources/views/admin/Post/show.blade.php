<x-app-layout>
<style>
    #wrapper{
        width: 1200px;
        background-color: rgb(245, 236, 236);
        position: absolute;
        height: 700px;
        padding: 50px;
        margin-top: 5%;
        margin-left: 20%;
        margin-right: 20%;
        border-radius: 5px;
    }
    .left{
        width: 45%;
        /* background-color: rgb(255, 255, 255); */
       
        float: left;
        height: 550px;
    }
    .right{
        width: 45%;
        /* background-color: rgb(211, 146, 146); */
        float: right;
        height: 550px;
        
    }
    
    img{
        width: 500px;
        height: 500px;
        border-radius: 5px;
    }
    #coursename, #username, #des, #ch, #nc, #createat, #updateat{
        color: purple;
        font-size: 30px;
        font-family: sans-serif;
    }
    #username, #des, #ch, #nc, #createat, #updateat{
        margin-bottom: 10px;
        font-family: sans-serif;
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
<input id="btnback" type="button" value=" >>Back"
            onclick="window.location='/admin/post/index'">
<form action="post">
    @csrf
    <div id="wrapper">
        {{-- @foreach ($post as $post) --}}
            <div class="left">
                
                <label for="" id="coursename">Course name &nbsp;:

                    <span style="color: rgb(0, 0, 0); font-size: 30px;
                                                font-family: sans-serif; letter-spacing: 0.1ch;">
                                {{  $post->coursename  }}
                    </span> 
                </label>
                <br><br>
                <img src="{{ asset('post/'.$post->image )}}" alt=""> <br>
                
            </div>
            
            <div class="right">
                <h1 style="font-size: 30px; padding-bottom: 50px;">-- Detail about a course --</h1>
                <label for="" id="username">User name &nbsp;:
                    <span style="color: rgb(0, 0, 0); font-size: 25px;
                                                font-family: sans-serif; letter-spacing: 0.1ch;">
                                {{  $post->username  }}
                    </span> 
                </label>
                <br><br>
                <label for="" id="des" >Description &nbsp;:
                    <span style="color: rgb(0, 0, 0); font-size: 25px;
                                                font-family: sans-serif; letter-spacing: 0.1ch;">
                                {{  $post->description  }}
                    </span> 
                </label>
                <br><br>
                <label for="" id="ch">Course hours &nbsp;:
                    <span style="color: rgb(0, 0, 0); font-size: 25px;
                                                font-family: sans-serif; letter-spacing: 0.1ch;">
                                {{  $post->coursehours  }}
                    </span> 
                </label>
                <br><br>
                <label for="" id="nc" >Number chapter &nbsp;:
                    <span style="color: rgb(0, 0, 0); font-size: 25px;
                                                font-family: sans-serif; letter-spacing: 0.1ch;">
                                {{  $post->Number_Chapter }}
                    </span> 
                </label>
                <br><br>
                <label for="" id="createat" >Created_at  &nbsp;:
                    <span style="color: rgb(0, 0, 0); font-size: 25px;
                                                font-family: sans-serif; letter-spacing: 0.1ch;">
                            {{  $post->created_at  }}
                    </span> 
                </label>
                <br><br>
                <label for="" id="updateat" >Updated_at &nbsp;:
                    <span style="color: rgb(0, 0, 0); font-size: 25px;
                                                font-family: sans-serif; letter-spacing: 0.1ch;">
                            {{  $post->updated_at  }}
                    </span> 
                </label>
            </div>
        {{-- @endforeach --}}

        
            
        
    </div>
    
    
    

</form>
</x-app-layout>