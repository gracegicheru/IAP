<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Transcripts</title>

    <!-- Fontfaces CSS-->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
       
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        
                        
                        <li class="active">
                            <a href="">
                                <i class="fas fa-table"></i>Transcripts</a>
                        </li>
                                              
                      
                                            </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                               

                                   <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        
                        
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Transcript</h3>
                                <div class="table-data__tool">
                                  
                                      <div class="table-data__tool-right" style="margin-left: 800px;">
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small btn btn-secondary mb-1" data-toggle="modal" data-target="#mediumModal">
                                            <i class="zmdi zmdi-plus"></i>Add A Subject</button>

                                    </div>
                                </div>
                          
                                
                            </div>
                        </div>
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Mathematics</th>
                                                <th>English</th>
                                                <th>Kiswahili</th>
                                                <th>Biology</th>
                                                <th>Chemistry</th>
                                                <th>Physics</th>
                                                <th>Geography</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             @foreach ($subjects as $subject)
                                            <tr>
                                                <td>{{$subject->sub1}}</td>
                                                <td>{{$subject->sub2}}</td>
                                                <td>{{$subject->sub3}}</td>
                                                <td>{{$subject->sub4}}</td>
                                                <td>{{$subject->sub5}}</td>
                                                <td>{{$subject->sub6}}</td>
                                                <td>{{$subject->sub7}}</td>
                                            </tr>
                                            @endforeach
                                         
                                           
                                          
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                      
                </div>
            </div>
        </div>

    </div>

       <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" id="modal">
                        <div class="col-lg-11">
                            <div class="card">
                                <div class="card-header">Enter your marks</div>
                                <div class="card-body card-block">
                                    <form action="" method="post" id="editProductsForm" enctype="multipart/form-data">
                                        <meta name="csrf-token" content="{{ csrf_token() }}">
                                           <div class="form-group">
                                            <input type="text" id="sub1" name="sub1" placeholder="Enter your Mathematics Marks" class="form-control" required>
                                            @if ($errors->has('sub1'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('sub1') }}</strong>
                                    </span>
                                @endif
                                        </div>
                                         <div class="form-group">
                                            <input type="text" id="sub2" name="sub2" placeholder="Enter your English Marks" class="form-control" required>
                                        </div>
                                         <div class="form-group">
                                            <input type="text" id="sub3" name="sub3" placeholder="Enter your Kiswahili Marks" class="form-control">
                                        </div>
                                         <div class="form-group">
                                            <input type="text" id="sub4" name="sub4" placeholder="Enter your Biology Marks" class="form-control" required>
                                        </div>
                                         <div class="form-group">
                                            <input type="text" id="sub5" name="sub5" placeholder="Enter your Chemistry Marks" class="form-control" required>
                                        </div>
                                         <div class="form-group">
                                            <input type="text" id="sub6" name="sub6" placeholder="Enter your Physics Marks" class="form-control" required>
                                        </div>
                                         <div class="form-group">
                                            <input type="text" id="sub7" name="sub7" placeholder="Enter your Geography Marks" class="form-control" required>
                                        </div>
                                    
                   
                                        <div class="form-actions form-group">
                                            <input type="hidden" id="id" name="id" class="form-control">
                                            <button type="submit" class="btn btn-success btn-sm " id="submitButton">Add Subjects</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>



    <!-- Jquery JS-->
    <script type="text/javascript " src="js/newsubject.js "></script>
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
