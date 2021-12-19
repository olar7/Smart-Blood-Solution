@extends('layouts.master')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css"
        integrity="sha256-3sPp8BkKUE7QyPSl6VfBByBroQbKxKG7tsusY2mhbVY=" crossorigin="anonymous" />
    <style>
        .featured-content {
            display: flex;
            justify-content: center;
            align-items: center;
            border: 5px solid;
            margin: 50px 300px;
            border-radius: 8px;
        }

        .card {
            margin: 30px;
            border: 2px solid;
           
        }

        .titleheading {
            /* border: 2px solid; */
            /* margin: 0px 300px; */
            display: flex;
        }

        .titleheading h2 {
            text-align: center;
        }

        .titleheading p {
            text-align: justify;
        }
        .about-content{
           
            text-align: center;
        
        }
        .about-content p{
            /* margin-top: 80px; */
            margin: 60px 50px;
        }

        .card h5 {
            font-weight: bold;
        }
        .card-text{
            text-align: justify;
        }

        #F-C {
            text-align: center;
        }

        /* list css */
        /* body{
    background:#f5f5f5;
    margin-top:20px;} */

        /* ===== Career ===== */
        .career-form {
            background-color: #4e63d7;
            border-radius: 5px;
            padding: 0 16px;
        }

        .career-form .form-control {
            background-color: rgba(255, 255, 255, 0.2);
            border: 0;
            padding: 12px 15px;
            color: #fff;
        }

        .career-form .form-control::-webkit-input-placeholder {
            /* Chrome/Opera/Safari */
            color: #fff;
        }

        .career-form .form-control::-moz-placeholder {
            /* Firefox 19+ */
            color: #fff;
        }

        .career-form .form-control:-ms-input-placeholder {
            /* IE 10+ */
            color: #fff;
        }

        .career-form .form-control:-moz-placeholder {
            /* Firefox 18- */
            color: #fff;
        }

        .career-form .custom-select {
            background-color: rgba(255, 255, 255, 0.2);
            border: 0;
            padding: 12px 15px;
            color: #fff;
            width: 100%;
            border-radius: 5px;
            text-align: left;
            height: auto;
            background-image: none;
        }

        .career-form .custom-select:focus {
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .career-form .select-container {
            position: relative;
        }

        .career-form .select-container:before {
            position: absolute;
            right: 15px;
            top: calc(50% - 14px);
            font-size: 18px;
            color: #ffffff;
            content: '\F2F9';
            font-family: "Material-Design-Iconic-Font";
        }

        .filter-result .job-box {
            -webkit-box-shadow: 0 0 35px 0 rgba(130, 130, 130, 0.2);
            box-shadow: 0 0 35px 0 rgba(130, 130, 130, 0.2);
            border-radius: 10px;
            padding: 10px 35px;
        }

        ul {
            list-style: none;
        }

        .list-disk li {
            list-style: none;
            margin-bottom: 12px;
        }

        .list-disk li:last-child {
            margin-bottom: 0;
        }

        .job-box .img-holder {
            height: 65px;
            width: 65px;
            background-color: #4e63d7;
            background-image: -webkit-gradient(linear, left top, right top, from(rgba(78, 99, 215, 0.9)), to(#5a85dd));
            background-image: linear-gradient(to right, rgba(78, 99, 215, 0.9) 0%, #5a85dd 100%);
            font-family: "Open Sans", sans-serif;
            color: #fff;
            font-size: 22px;
            font-weight: 700;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            border-radius: 65px;
        }

        .career-title {
            background-color: #4e63d7;
            color: #fff;
            padding: 15px;
            text-align: center;
            border-radius: 10px 10px 0 0;
            background-image: -webkit-gradient(linear, left top, right top, from(rgba(78, 99, 215, 0.9)), to(#5a85dd));
            background-image: linear-gradient(to right, rgba(78, 99, 215, 0.9) 0%, #5a85dd 100%);
        }

        .job-overview {
            -webkit-box-shadow: 0 0 35px 0 rgba(130, 130, 130, 0.2);
            box-shadow: 0 0 35px 0 rgba(130, 130, 130, 0.2);
            border-radius: 10px;
        }

        @media (min-width: 992px) {
            .job-overview {
                position: -webkit-sticky;
                position: sticky;
                top: 70px;
            }
        }

        .job-overview .job-detail ul {
            margin-bottom: 28px;
        }

        .job-overview .job-detail ul li {
            opacity: 0.75;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .job-overview .job-detail ul li i {
            font-size: 20px;
            position: relative;
            top: 1px;
        }

        .job-overview .overview-bottom,
        .job-overview .overview-top {
            padding: 35px;
        }

        .job-content ul li {
            font-weight: 600;
            opacity: 0.75;
            border-bottom: 1px solid #ccc;
            padding: 10px 5px;
        }

        @media (min-width: 768px) {
            .job-content ul li {
                border-bottom: 0;
                padding: 0;
            }
        }

        .job-content ul li i {
            font-size: 20px;
            position: relative;
            top: 1px;
        }

        .mb-30 {
            margin-bottom: 30px;
        }

        #list-container {
            margin-top: 50px;
        }

        .contactform {
            margin: 0 200px;
           

        }

       

        .contactform h2 {
            text-align: center;
        }
        #mapsec{
            margin-top:30px;
        }
        .carousel-item h5 {
            color: black;
            font-weight: bold;
        }
        .carousel-item h2 {
            color: black;
            font-weight: bold;
        }
        .carousel-item p{
            color: black;
            font-weight: bold;
        }
        .slider-btn button{
            padding: 10px;
            border: 2px solid;
            border-radius: 13px;
            background-color: coral;
            font-weight: bold;
            
        }
        .carousel-item{
            opacity: 0.9;
        }
        .carousel-inner{
            margin-bottom: 50px;
        }
        #list-org{
            width:100%
        }
        #org-show{
            background-color: #cf3d3c;
            height: 80px;
        }

        #org-show h2{
            color: white;
            text-align: center;
            
        }
        .slider-btn a{
            text-decoration: none;
            color: black;
        }

      
        
    </style>
</head>

<body>
   
<!-- carousel starts -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/bloodimg.jpeg" class="d-block w-100" alt="..." style="height: 600px;">
            <div class="carousel-caption d-none d-md-block">
              <h2>Eliminate Blood Scarcity</h2>
              <p>Donate Now</p>
              <div class="slider-btn">
                <button><a href="/bedonor">Donate Blood</a></button>
                <button><a href="/donorreq">Request Blood</a></button>
            </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/2.jpg" class="d-block w-100" alt="..." style="height: 600px;">
            <div class="carousel-caption d-none d-md-block">
            <h2>Eliminate Blood Scarcity</h2>
              <p>donating your time to make an impact, your blood to save lives or your money to create a holistic blood management cycle.</p>
              <div class="slider-btn">
                <button><a href="/bedonor">Donate Blood</a></button>
                <button><a href="/donorreq">Request Blood</a></button>
            </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/3.jpg" class="d-block w-100" alt="..." style="height: 600px;">
            <div class="carousel-caption d-none d-md-block">
                <h2>Eliminate Blood Scarcity</h2>
                <p>Donate Now</p>
                <div class="slider-btn">
                    <button><a href="/bedonor">Donate Blood</a></button>
                    <button><a href="/donorreq">Request Blood</a></button>
                  </div>
              <!-- <div class="slider-btn">
              <button>Become a Donor</button>
                <button>Learn More</button>
              </div> -->
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    <!-- carousel ends -->

    <!-- featured campaigns starts here -->
    <h2 id="F-C">Up-Comming campaigns</h2>

    <div class="featured-content">

        <div class="card" style="width: 18rem;">
            <img src="images/camp1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h4>Red Cross</h4>
                <hr>
                <h5 class="card-title">19th December,2021</h5>
                <p class="card-text">Nepal Red Cross  is conducting a blood donation camp at Ravibhawan at 19th of december till 25th of december.</p>
                <a href="/campaigndetails" class="btn btn-primary">View Details</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="images/camp.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h4>Himal Blood Bank</h4>
                <hr>
                <h5 class="card-title">25th December,2021</h5>
                <p class="card-text">Himal Blood Organization is conducting a blood donation camp at Basantapur at 25th of december till 27th of december.Find more details</p>
                <a href="/campaigndetails" class="btn btn-primary">View Details</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="images/7.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h4>Blood association</h4>
                <hr>
                <h5 class="card-title">12th january,2022</h5>
                <p class="card-text">Blood association nepal is conducting a blood donation camp at L.A school,Hatiiban at 12th of january. Find more details </p>
                <a href="/campaigndetails" class="btn btn-primary">View Details</a>
            </div>
        </div>
    </div>
    <!-- featured campaigns ends here -->


    <!-- About us section starts here -->
    <div class="titleheading">
        <div class="about-image">
        <img src="images/about1.jpg" alt="" srcset="" width="100%" style="height: 450px; width: 600px;">
        </div>
        <div class="about-content">
        <h2>About Us</h2>
        <p>Our Main Objective is to digitalize blood donation system in nepal.
            <br>
            <br>
            
            In Nepal, the current blood management system is laborious, inefficient, and inconvenient. The information on blood collection and supply is manually recorded in most blood banks' registers.
            <br>
            <br>

            Maintaining blood stock inventory is time-consuming, requiring complex back-office paperwork, and maintaining information on blood supply and shortages is a difficult undertaking.From collection through distribution, a social endeavor for a smart, transparent, and holistic blood management service.
            <br>
            <br>
            
            
            When it comes to blood, having the proper information at the right moment might mean the difference between life and death.</p>
    </div>
    </div>
    <!-- about us ends here -->

    

    <div class="container-fluid" id="list-container">

        <div class="row">
            <div class="col-lg-10 mx-auto" id ="list-org">
                <div class="career-search mb-60">

                    <div  class="career-form mb-60" id="org-show" >
                        
                        <h2>Organization list</h2>
                        
                         </div>

                    <div class="filter-result">


                        <div class="job-box d-md-flex align-items-center justify-content-between mb-30">
                            <div class="job-left my-4 d-md-flex align-items-center flex-wrap">
                                <div class="img-holder mr-md-4 mb-md-0 mb-4 mx-auto mx-md-0 d-md-none d-lg-flex">
                                    BKT
                                </div>
                                <div class="job-content">
                                    <h5 class="text-center text-md-left">Bhaktapur Blood Bank</h5>
                                    <ul class="d-md-flex flex-wrap text-capitalize ff-open-sans">
                                        <li class="mr-md-4">
                                            <i class="zmdi zmdi-pin mr-2"></i> Dudhpati, Bhaktapur
                                        </li>
                                        <li class="mr-md-4">
                                            <i class="zmdi zmdi-phone mr-2"></i> 01-4412430
                                        </li>

                                        <li class="mr-md-4">
                                            <i class="zmdi zmdi-time mr-2"></i> Full Time
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="job-right my-4 flex-shrink-0">
                                <a href="/orgprofile" class="btn d-block w-100 d-sm-inline-block btn-light">View Profile</a>
                            </div>
                        </div>

                        <div class="job-box d-md-flex align-items-center justify-content-between mb-30">
                            <div class="job-left my-4 d-md-flex align-items-center flex-wrap">
                                <div class="img-holder mr-md-4 mb-md-0 mb-4 mx-auto mx-md-0 d-md-none d-lg-flex">
                                    KTM
                                </div>
                                <div class="job-content">
                                    <h5 class="text-center text-md-left">Central blood bank</h5>
                                    <ul class="d-md-flex flex-wrap text-capitalize ff-open-sans">
                                        <li class="mr-md-4">
                                            <i class="zmdi zmdi-pin mr-2"></i> Ravibhawan
                                        </li>
                                        <li class="mr-md-4">
                                            <i class="zmdi zmdi-phone mr-2"></i> 01-4107000
                                        </li>

                                        <li class="mr-md-4">
                                            <i class="zmdi zmdi-time mr-2"></i> 5:30 a.m - 9:30 p.m
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="job-right my-4 flex-shrink-0">
                                <a href="/orgprofile" class="btn d-block w-100 d-sm-inline-block btn-light">View Profile</a>
                            </div>
                        </div>

                        <div class="job-box d-md-flex align-items-center justify-content-between mb-30">
                            <div class="job-left my-4 d-md-flex align-items-center flex-wrap">
                                <div class="img-holder mr-md-4 mb-md-0 mb-4 mx-auto mx-md-0 d-md-none d-lg-flex">
                                    KTM
                                </div>
                                <div class="job-content">
                                    <h5 class="text-center text-md-left">Himal Hospital Blood Bank</h5>
                                    <ul class="d-md-flex flex-wrap text-capitalize ff-open-sans">
                                        <li class="mr-md-4">
                                            <i class="zmdi zmdi-pin mr-2"></i> Gyaneshwar, Kathmandu
                                        </li>
                                        <li class="mr-md-4">
                                            <i class="zmdi zmdi-phone mr-2"></i> 01-5427033
                                        </li>

                                        <li class="mr-md-4">
                                            <i class="zmdi zmdi-time mr-2"></i> Full Time
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="job-right my-4 flex-shrink-0">
                                <a href="/orgprofile" class="btn d-block w-100 d-sm-inline-block btn-light">View Profile</a>
                            </div>
                        </div>

                        <div class="job-box d-md-flex align-items-center justify-content-between mb-30">
                            <div class="job-left my-4 d-md-flex align-items-center flex-wrap">
                                <div class="img-holder mr-md-4 mb-md-0 mb-4 mx-auto mx-md-0 d-md-none d-lg-flex">
                                    KTM
                                </div>
                                <div class="job-content">
                                    <h5 class="text-center text-md-left"> Nobel Hospital Blood Bank</h5>
                                    <ul class="d-md-flex flex-wrap text-capitalize ff-open-sans">
                                        <li class="mr-md-4">
                                            <i class="zmdi zmdi-pin mr-2"></i> Sinamangal, Kathmandu
                                        </li>
                                        <li class="mr-md-4">
                                            <i class="zmdi zmdi-phone mr-2"></i> 01-4110842
                                        </li>
                                        <li class="mr-md-4">
                                            <i class="zmdi zmdi-time mr-2"></i> 5:30 A.M to 7:00 P.M
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="job-right my-4 flex-shrink-0">
                                <a href="/orgprofile" class="btn d-block w-100 d-sm-inline-block btn-light">View Profile</a>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div>

    </div>

    <!-- Contact Form section -->
    <div class="contactform">
        <h2>Contact Us</h2>
        <form action="">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter your name">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Subject</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter your Subject">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label" >Message us</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Write your Message here"></textarea>
            </div>
            <br>
            <hr>
            <button type="button" class="btn btn-success">Send</button>
        </form>
    </div>

    <!-- map -->
    <div id ="mapsec">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.241899099359!2d85.32581501552153!3d27.70981658279099!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb194eaff7f6fb%3A0x3921766eb82c435f!2sHimal%20Blood%20Transfusion%20Center!5e0!3m2!1sen!2snp!4v1637864157709!5m2!1sen!2snp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

    
</body>

</html>

@endsection