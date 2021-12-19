<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        div li{
            margin: 0px 20px;
        }

        #login-icon{
            position : absolute;
            top : 0px;
            left: 1400px;
        }
        #login-icon:hover{
            cursor:pointer;
        }
        
        #navbarSupportedContent a{
          color:white;
          font-weight:bold;
        }

        #navbarSupportedContent a:hover{
          color:black;

        }
        #naved{
          background-color: #cf3d3c;
          border-bottom: 2px solid;
          position: sticky;
          top: 0;
          left: 0;
          width: 100%;
          z-index: 2;
          height: 60px;
          
        }

        #sticky-footer{
          background-color: #cf3d3c;
        }

      
        
    </style>
    <title>Blood Bank</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-#cf3d3c" id ="naved">
  <div class="container-fluid" >
    <!-- <a class="navbar-brand" href="#"><i class="bi bi-building"></i></a>
    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="20" fill="white" class="bi bi-building" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"/>
  <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"/>
</svg> -->
<img src="images/nav.png" alt="" srcset="" style="height:60px; width: 50px;">
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/index">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="donorlist">Available Donors</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/bedonor" >Donate Blood</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/donorreq" >Request Blood</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Contact us</a>
        </li>
        
        <div id= "login-icon">
        <a class="nav-link active" href="/admin"><i class="bi bi-person-fill" ></i></a>
          <svg xmlns="http://www.w3.org/2000/svg" width="60" height="30" fill="white" class="bi bi-person-fill" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>
    </div>
      </ul>
    </div>
  </div>
</nav>

<div>
    @yield('content')
</div>

<div class="footer">

  <footer id="sticky-footer" class="flex-shrink-0 py-4  text-white">
    <div class="container text-center">
      <h4>Copyright &copy; Blood bank</h4>
    </div>
  </footer>
</div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
   
  </body>
</html>