@extends('layouts.app')

@section('custom_css')
<link rel="stylesheet" type="text/css" href="css/profile.css">
@endsection

@section('content')

        <!-- Profile and Image section -->
        <div class="container mt-50">
            <section id="profile">
                <div id="image">
                    <img src="/images/profile/imgIcon.png" alt="Profile Pic" class="profilePic"> 
                   <!--  <a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" 
                    id="Layer_1" x="0px" y="0px" viewBox="0 0 300 300" style="enable-background:new 0 0 300 300;" 
                    xml:space="preserve" width="512px" height="512px" class=""><g><g><g><path 
                    d="M149.996,0C67.157,0,0.001,67.161,0.001,149.997S67.157,300,149.996,300s150.003-67.163,150.003-150.003    
                    S232.835,0,149.996,0z M221.302,107.945l-14.247,14.247l-29.001-28.999l-11.002,11.002l29.001,29.001l-71.132,71.126    
                    l-28.999-28.996L84.92,186.328l28.999,28.999l-7.088,7.088l-0.135-0.135c-0.786,1.294-2.064,2.238-3.582,2.575l-27.043,6.03   
                    c-0.405,0.091-0.817,0.135-1.224,0.135c-1.476,0-2.91-0.581-3.973-1.647c-1.364-1.359-1.932-3.322-1.512-5.203l6.027-27.035    
                    c0.34-1.517,1.286-2.798,2.578-3.582l-0.137-0.137L192.3,78.941c1.678-1.675,4.404-1.675,6.082,0.005l22.922,22.917    
                    C222.982,103.541,222.982,106.267,221.302,107.945z" data-original="#000000" class="active-path"
                    data-old_color="#00FF87" fill="#A875FF"/>
                    </g></g></g> </svg> </a> -->
                </div>
                <div class="nameContent">   
                    <h3 class="profileName"> Tonny Flake </h3>
                    <p class="location"> Lagos, Nigeria </p>
                <div>
            </section>
        </div>

        <div class="container form-container">  
            <form action="">
                <div>
                    <label for="inputFirstName"> First Name </label>
                    <input class="form-control" type="text" id="inputFirstName" placeholder="Enter First Name" />
                </div>

                <div>
                    <label for="inputLastName"> Last Name </label>
                    <input class="form-control" type="text" id="inputLastName" placeholder="Enter Last Name" />
                </div>

                <div>
                    <label for="inputEmail"> Email </label>
                    <input class="form-control" type="email" id="inputEmail" placeholder="Enter Email" />
                </div>

                <div>
                    <label for="inputPhoneNumber"> Phone Number </label>
                    <input class="form-control" type="tel" id="inputPhoneNumber" placeholder="Enter Phone Number" />
                </div>

                <div>
                    <label for="inputLocation"> Location </label>
                    <input class="form-control" type="text" id="inputLocation" placeholder="Enter Location" />
                </div>

                <div>
                    <label for="inputPostal"> Postal Code </label>
                    <input class="form-control" type="text" id="inputPostal" placeholder="Enter Phone Code" />
                </div>

                <div>
                    <label for="inputStatus"> Update Profile Image </label>
                    <input type="file" name="photo" id="cover">
                </div>
                
                <div id="button">
                    <input type="submit" value="Save" />
                </div>
            </form>
        </div>      
    

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-angle-double-up"></span></div>

@endsection