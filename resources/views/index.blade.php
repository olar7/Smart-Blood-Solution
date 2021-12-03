@extends('layouts.master')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .featured-content {
            display: flex;
            justify-content: center;
            align-items: center;
            border: 2px solid;
            margin: 50px 300px;
        }

        .card {
            margin: 30px;
        }

        .titleheading {
            border: 2px solid;
            margin: 0px 300px;
        }

        .titleheading h2 {
            text-align: center;
        }

        .titleheading p {
            text-align: justify;
        }

        .card h5 {
            font-weight: bold;
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
    </style>
</head>

<body>
    <link rel="stylesheet" href="index.css">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/ben.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="..." alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="..." alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <h2 id="F-C">Featured campaigns</h2>

    <div class="featured-content">

        <div class="card" style="width: 18rem;">
            <img src="images/ben2.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Date</h5>
                <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel rem esse dolore
                    explicabo soluta tenetur quis ad perspiciatis recusandae optio?</p>
                <a href="#" class="btn btn-primary">View Details</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="images/ben2.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Date</h5>
                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim nam reiciendis
                    explicabo. Temporibus, inventore! Deserunt tenetur voluptas commodi iste provident.</p>
                <a href="#" class="btn btn-primary">View Details</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="images/ben2.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Date</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores reprehenderit
                    deleniti facilis dolor natus consequuntur sunt perspiciatis, ipsam quibusdam similique.</p>
                <a href="#" class="btn btn-primary">View Details</a>
            </div>
        </div>
    </div>
    <div class="titleheading">
        <h2>About Us</h2>
        <img src="images/download.png" alt="" srcset="" width="100%">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit in tempora perspiciatis, nulla quia sapiente
            velit deserunt aliquid harum totam odit ullam vitae sint laborum voluptatum assumenda? Ad, ducimus
            voluptatum enim repudiandae voluptatem atque. Animi nam ab ex, cumque illum eius reprehenderit fugit velit
            impedit omnis laboriosam, voluptate hic. Aspernatur.</p>
    </div>

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css"
        integrity="sha256-3sPp8BkKUE7QyPSl6VfBByBroQbKxKG7tsusY2mhbVY=" crossorigin="anonymous" />

    <div class="container-fluid" id="list-container">

        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="career-search mb-60">

                    <form action="#" class="career-form mb-60">
                        <div class="row">
                            <div class="col-md-6 col-lg-3 my-3">
                                <div class="input-group position-relative">
                                    <input type="text" class="form-control" placeholder="Enter Organization Name"
                                        id="keywords">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 my-3">
                                <div class="select-container">
                                    <select class="custom-select">
                                        <option selected=""> Select City</option>
                                        <option value="1">Kathmandu</option>
                                        <option value="2">Pokhara</option>
                                        <option value="3">Janakpur</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 my-3">
                                <div class="select-container">
                                    <select class="custom-select">
                                        <option selected="">Select location </option>
                                        <option value="1">Ravibhawan</option>
                                        <option value="2">Budanilkantha</option>
                                        <option value="3">Dhapasi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 my-3">
                                <button type="button" class="btn btn-lg btn-block btn-light btn-custom"
                                    id="contact-submit">
                                    Search
                                </button>
                            </div>
                        </div>
                    </form>

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
                                <a href="#" class="btn d-block w-100 d-sm-inline-block btn-light">View Details</a>
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
                                <a href="#" class="btn d-block w-100 d-sm-inline-block btn-light">View Details</a>
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
                                <a href="#" class="btn d-block w-100 d-sm-inline-block btn-light">View Details</a>
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
                                <a href="#" class="btn d-block w-100 d-sm-inline-block btn-light">View Details</a>
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