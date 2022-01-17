<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
  
  <!-- bootstrap link -->
 



  <style>
    body{
      font-family: 'Lato', sans-serif;

    }
    /* sidebar style */
    #wrapper {
      padding-left: 0;
      -webkit-transition: all 0.5s ease;
      -moz-transition: all 0.5s ease;
      -o-transition: all 0.5s ease;
      transition: all 0.5s ease;
    }

    #wrapper.toggled {
      padding-left: 250px;
    }

    #sidebar-wrapper {
      z-index: 1000;
      position: fixed;
      left: 250px;
      width: 0;
      height: 100%;
      margin-left: -250px;
      overflow-y: auto;
      background: #000;
      -webkit-transition: all 0.5s ease;
      -moz-transition: all 0.5s ease;
      -o-transition: all 0.5s ease;
      transition: all 0.5s ease;
    }

    #wrapper.toggled #sidebar-wrapper {
      width: 250px;
    }

    #page-content-wrapper {
      width: 100%;
      position: absolute;
      padding: 15px;
    }

    #wrapper.toggled #page-content-wrapper {
      position: absolute;
      margin-right: -250px;
    }

    .fixed-brand {
      width: auto;
    }

    /* Sidebar Styles */

    .sidebar-nav {
      position: absolute;
      top: 0;
      width: 250px;
      margin: 0;
      padding: 0;
      list-style: none;
      margin-top: 2px;
    }

    .sidebar-nav li {
      text-indent: 15px;
      line-height: 40px;
    }

    .sidebar-nav li a {
      display: block;
      text-decoration: none;
      color: #FAFAFA;
    }

    .sidebar-nav li a:hover {
      text-decoration: none;
      color: #fff;
      background: rgba(255, 255, 255, 0.2);
      border-left: red 2px solid;
    }

    .sidebar-nav li a:active,
    .sidebar-nav li a:focus {
      text-decoration: none;
    }

    .sidebar-nav>.sidebar-brand {
      height: 65px;
      font-size: 18px;
      line-height: 60px;
    }

    .sidebar-nav>.sidebar-brand a {
      color: #999999;
    }

    .sidebar-nav>.sidebar-brand a:hover {
      color: #fff;
      background: none;
    }

    .no-margin {
      margin: 0;
    }

    @media(min-width:768px) {
      #wrapper {
        padding-left: 250px;
      }

      .fixed-brand {
        width: 250px;
      }

      #wrapper.toggled {
        padding-left: 0;
      }

      #sidebar-wrapper {
        width: 250px;
      }

      #wrapper.toggled #sidebar-wrapper {
        width: 250px;
      }

      #wrapper.toggled-2 #sidebar-wrapper {
        width: 150px;
      }

      #wrapper.toggled-2 #sidebar-wrapper:hover {
        width: 250px;
      }

      #page-content-wrapper {
        padding: 20px;
        position: relative;
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
      }

      #wrapper.toggled #page-content-wrapper {
        position: relative;
        margin-right: 0;
        padding-left: 250px;
      }

      #wrapper.toggled-2 #page-content-wrapper {
        position: relative;
        margin-right: 0;
        margin-left: -200px;
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
      }
    }

    #maincontent {
      position: absolute;
      top: 60px;
      left: 280px;
      
    }
    #dropdownMenuButton {
     /* margin-right: 55px; */
     position: relative;
    }



    /* sidebar style */
  </style>
  <title>Admin Dashboard</title>
</head>

<body>
  <!-- navbar section -->

  <nav class="navbar navbar-dark bg-dark" id="adminnav">
    <a href="/"><span class="navbar-brand mb-0 h1">Blood Bank</span></a>
            

     <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                
            <strong>{{ Auth::user()->first_name }}</strong>
              </button>
                            
      <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownMenuButton">
        <li><a class="dropdown-item" href="#">Settings</a></li>
        <li><a class="dropdown-item" href="/profile">Profile</a></li>
        <li><hr class="dropdown-divider"></li>
        <li>
        <a class="dropdown-item" href="{{ route('logout') }}"
          onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                    </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
          
  </nav>

  <!-- sidebar section -->

  <div id="wrapper">
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
      <ul class="sidebar-nav nav-pills nav-stacked" id="menu">

        
        @can('admindash-view')
        <li class="active">
          <a href="/admin">Dashboard</a>
        </li>
        @endcan
        
        <li>
          <a href="/admin/adminvalidation"> Blood Requests</a>
        </li>
        <li>
          <a href="/admin/contactform"> Inbox</a>
        </li>
        
        
        @can('admin-view')
        <li>
          <a href="/admin/admin"> Admins</a>
        </li>
        
        @endcan

        @can('client-view')
        <li>
          <a href="/admin/clientlist"> Client</a>
        </li>
        @endcan

        @can('organization-view')
        <li>
          <a href="/admin/organization">Organizations </a>
        </li>
        @endcan

        @can('bloodstock-view')
        <li>
          <a href="/admin/bloodstock">Inventory </a>
        </li>
        @endcan

        @can('user_type-access')
        <li>
          <a href="/admin/user_type">Permissions</a>
        </li>
        @endcan

        @can('blog-view')
        <li>
          <a href="/admin/blog">Blogs</a>
        </li>
        @endcan

        @can('blood-view')
        <li>
          <a href="/admin/blood">Blood Information</a>
        </li>
        @endcan 

        @can('detail-view')
        <li>
          <a href="/admin/detail">Details</a>
        </li>
        @endcan

        @can('question-view')
        <li>
          <a href="/admin/question">Questions</a>
        </li>
        @endcan

        @can('campaign-view')
        <li>
          <a href="/admin/campaign"> Campaigns</a>
        </li>
        @endcan

        <li>
          <a href="#">Settings</a>
        </li>
        
      </ul>
    </div>

  </div>

 


    
  
<!-- bootstrap links -->
  <script src="https://kit.fontawesome.com/1aea98032a.js" crossorigin="anonymous"></script>

  <!-- bootstrap link end -->

  <div id="maincontent">
    @yield('content')
  </div>

  
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>