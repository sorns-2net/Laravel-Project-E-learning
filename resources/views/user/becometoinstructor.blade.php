<x-app-layout>
    <style>
        #inputInformation{
            width: 60%;
            height: 670px;
            background-color: white;
            margin: auto 20%;
            padding: 20px;
            margin-top: 4%;
            border-radius: 5px;
        }
        #forinput{
            width: 50%;
            height: auto;
            float:right;
            
        }
        #first_name, #last_name, #email, #phone_number, #company_name, #job_title, #countryofresidence{
            
        }
        #btnregister{
            width: 100%;
            height: 40px;
            background-color: #3e5e9c;
            color: rgb(255, 255, 255);
            border-radius: 5px;
            font-size: 20px;
            font-family: sans-serif;
            cursor: pointer;
        }
        #btnregister:hover{
            background-color: #1f3053;
            color: white;
            border-radius: 5px;
        }
        #btncancel{
            font-size: 20px;
            color: red;
            width: 100%;
            height: 40px;
            margin-top: 10px;
            cursor: pointer;
        }
        #btncancel:hover{
            background: rgb(231, 143, 143);
            color: white;
            border-radius: 5px;
        }
        #fortext{
            float: left;
            width: 50%;
            height: 670px;

        }
        h1{
            font-size: 7vh;
            color: #000000;
        }
        p{
            font-family: sans-serif;
            font-size: 17px;
            width: 70%;
            color: #2e2d2d;
        }
    </style>
    <form action="{{ url('/user/becometoinstructor') }}" method="POST">
        @csrf
        <div id="inputInformation">
            <div id="fortext">
                <h1>Get your demo</h1>
                <br>
                <p>See why leading organizations choose BlogSS12 Business as their destination for employee learning.</p>
                <br><br>
                <h2 style="font-size: 3vh;color: black">In your demo, learn more about:</h2>
                <br>
                <p> + Unlimited access to 22,000+ top Udemy courses and certifications – anytime, on any device</p>
                <br>
                <p> + Fresh content taught by global instructors in 15 languages – for any learning style</p>
                <br>
                <p> + Actionable learning insights and admin functionality</p>

            </div>


            <div id="forinput">
                <input type="text" name="email" id="email" placeholder="Please enter your work Email">
                <input type="text" name="first_name" placeholder="Please enter your First Name" id="first_name">
                <input type="text" name="last_name" placeholder="Please enter your Last Name" id="last_name">
                <input type="text" name="phone_number" placeholder="Please enter your Phone Number" id="phone_number">
                <input type="text" name="company_name" placeholder="Please enter your Company Name" id="company_name">
                <input type="text" name="job_title" placeholder="Please enter your Job Title" id="job_title">
                <input type="text" name="countryofresidence" placeholder="Please enter your Country of Residence" id="countryofresidence">
                <input type="submit" value="Register" id="btnregister">
                <input onclick="window.location.href='{{ route('dashboard') }}'" type="button" value="Cancel" id="btncancel">

            </div>
            
        </div>
    </form>
</x-app-layout>