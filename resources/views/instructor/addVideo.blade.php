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
        <input id="btnback" type="button" value=" >>Back"
            onclick="window.location='/instructor/myCourse'">
        <div id="uploadVideo" style="width: 40%;
                                        margin-left:30%;
                                        margin-right: 30%;
                                        align-items: center;
                                        justify-content: center;
                                        position: relative;
                                        /* background-color: black; */
                                        padding-left: 7%;
                                        padding-right: 7%;" >

                
                <form action="{{ url('/instructor/addVideo') }}" method="post" enctype="multipart/form-data">

                    @csrf
                    <div style="background-color: white; padding: 50px; width: 600px; margin-top: 20%; border-radius: 5px;">
                        <label for="title">Video title</label>
                        <br>
                        <input type="text" name="title" id="title" 
                            style="width: 500px; border-radius: 5px; border: 1px solid rgb(247, 214, 26);">
                        <br><br>
                        <label for="link_video">Add link video</label>
                        <br>
                        <textarea name="link_video" id="link_video" cols="40" rows="6" 
                            style="width: 500px; border-radius: 5px; border: 1px solid rgb(252, 218, 26);">
                        </textarea>
                        
                        <br><br>
                        <input type="submit" value="Upload video now" id="btnsubmit" style="background-color:#1f3053 ;
                                                                                    width: 100%;
                                                                                    height: 4vh;
                                                                                    cursor: pointer;
                                                                                    border-radius: 5px;
                                                                                    color: white;" >
                    </div>
                    
                </form>
           
        </div>
</x-app-layout>