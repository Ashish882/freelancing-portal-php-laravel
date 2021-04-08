
<!DOCTYPE html>
<html lang="en">


<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Freelancing portal</title>
<!-- Favicon icon -->
<link rel="icon" type="image/png" sizes="16x16" href="xhtml/images/favicon.png">
<link href="xhtml/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
<link rel="stylesheet" href="vendor/chartist/css/chartist.min.css">
<link href="xhtml/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
<link href="xhtml/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
<link href="xhtml/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="xhtml/css/style.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;family=Roboto:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet">
</head>
<body>

<!--*******************
Preloader start
********************-->
<div id="preloader">
<div class="sk-three-bounce">
    <div class="sk-child sk-bounce1"></div>
    <div class="sk-child sk-bounce2"></div>
    <div class="sk-child sk-bounce3"></div>
</div>
</div>
<!--*******************
Preloader end
********************-->

<!--**********************************
Main wrapper start
***********************************-->
<div id="main-wrapper">

<!--**********************************
    Nav header start
***********************************-->
<div class="nav-header">
    <a href="index.php" class="brand-logo">
        <img class="logo-abbr" src="xhtml/images/logo.png" alt="">
        <img class="logo-compact" src="xhtml/images/logo-text.png" alt="">
        <img class="brand-title" src="/xhtml/images/logo-text.png" alt="">
    </a>

    <div class="nav-control">
        <div class="hamburger">
            <span class="line"></span><span class="line"></span><span class="line"></span>
        </div>
    </div>
</div>
<!--**********************************
    Nav header end
***********************************-->



<!--**********************************
    Header start
***********************************-->
<div class="header">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left">
                    <div class="dashboard_bar">
                        Freelancer Dashboard
                    </div>
                </div>
                <ul class="navbar-nav header-right">
                    <li class="nav-item">
                    <!--
                        <div class="input-group search-area d-xl-inline-flex d-none">
                            <input type="text" class="form-control" placeholder="Search here...">
                            <div class="input-group-append">
                                <span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
                            </div>
                        </div>-->
                    </li>
                    <!--
                    <li class="nav-item dropdown notification_dropdown">
                        <a class="nav-link  ai-icon" href="javascript:void(0)" role="button" data-toggle="dropdown">
                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.4525 25.6682C11.0606 27.0357 12.4091 28 14.0006 28C15.5922 28 16.9407 27.0357 17.5488 25.6682C16.4266 25.7231 15.2596 25.76 14.0006 25.76C12.7418 25.76 11.5748 25.7231 10.4525 25.6682Z" fill="#3E4954"/>
                                <path d="M26.3531 19.74C24.8769 17.8785 22.3995 14.2195 22.3995 10.64C22.3995 7.09073 20.1192 3.89758 16.7995 2.72382C16.7592 1.21406 15.5183 0 14.0006 0C12.4819 0 11.2421 1.21406 11.2017 2.72382C7.88095 3.89758 5.60064 7.09073 5.60064 10.64C5.60064 14.2207 3.12434 17.8785 1.64706 19.74C1.15427 20.3616 1.00191 21.1825 1.24051 21.9363C1.47348 22.6721 2.05361 23.2422 2.79282 23.4595C4.08755 23.8415 6.20991 24.2715 9.44676 24.491C10.8479 24.5851 12.3543 24.64 14.0007 24.64C15.646 24.64 17.1524 24.5851 18.5535 24.491C21.7914 24.2715 23.9127 23.8415 25.2085 23.4595C25.9477 23.2422 26.5268 22.6722 26.7597 21.9363C26.9983 21.1825 26.8448 20.3616 26.3531 19.74Z" fill="#3E4954"/>
                            </svg>
                            <span class="badge light text-white bg-primary">3</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div id="DZ_W_Notification1" class="widget-media dz-scroll p-3 height380">
                                <ul class="timeline">
                                    <li>
                                        <div class="timeline-panel">
                                            <div class="media mr-2">
                                                <img alt="image" width="50" src="images/avatar/1.jpg">
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mb-1">Dr sultads Send you Photo</h6>
                                                <small class="d-block">29 July 2020 - 02:26 PM</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="timeline-panel">
                                            <div class="media mr-2 media-info">
                                                KG
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mb-1">Resport created successfully</h6>
                                                <small class="d-block">29 July 2020 - 02:26 PM</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="timeline-panel">
                                            <div class="media mr-2 media-success">
                                                <i class="fa fa-home"></i>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mb-1">Reminder : Treatment Time!</h6>
                                                <small class="d-block">29 July 2020 - 02:26 PM</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="timeline-panel">
                                            <div class="media mr-2">
                                                <img alt="image" width="50" src="images/avatar/1.jpg">
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mb-1">Dr sultads Send you Photo</h6>
                                                <small class="d-block">29 July 2020 - 02:26 PM</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="timeline-panel">
                                            <div class="media mr-2 media-danger">
                                                KG
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mb-1">Resport created successfully</h6>
                                                <small class="d-block">29 July 2020 - 02:26 PM</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="timeline-panel">
                                            <div class="media mr-2 media-primary">
                                                <i class="fa fa-home"></i>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mb-1">Reminder : Treatment Time!</h6>
                                                <small class="d-block">29 July 2020 - 02:26 PM</small>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <a class="all-notification" href="javascript:void(0)">See all notifications <i class="ti-arrow-right"></i></a>
                        </div>
                    </li>-->
              

                    <!------------------------------------------------------------------------->
                    <li class="nav-item dropdown header-profile">
                        <a class="nav-link" href="javascript:void(0)" role="button" data-toggle="dropdown">
                            <div class="header-info">
                                <span class="text-black"><strong>{{ Auth::user()->name }}</strong></span>
                                <p class="fs-12 mb-0">Employee</p>
                            </div>
                            <img src="xhtml/images/profile/17.jpg" width="20" alt=""/>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="app-profile.html" class="dropdown-item ai-icon">
                                <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                <span class="ml-2">Profile </span>
                            </a>
                    
                            <a href="email-inbox.html" class="dropdown-item ai-icon">
                                <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                <span class="ml-2">Add Project </span>
                            </a>

                            <form method="POST" action="logout">
                          @csrf
                          <a onclick="event.preventDefault();
                                                this.closest('form').submit();" class="dropdown-item ai-icon">
                                <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                <span class="ml-2">Logout </span>
                            </a>
                         </form>

                          

                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!--**********************************
    Header end ti-comment-alt
***********************************-->

<!--**********************************
    Sidebar start
***********************************-->
<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li><a class="ai-icon" href="freelancer_dashboard">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>

            <li><a class="ai-icon" href="project">
                    <i class="flaticon-381-heart"></i>
                    <span class="nav-text">My Projects</span>
                </a>
            
            </li>

            <li><a class="ai-icon" href="settings" >
                    <i class="flaticon-381-layer-1"></i>
                    <span class="nav-text">Add Projects</span>
                </a>
    
            </li>

            <li><a class="ai-icon" href="view_application" >
                    <i class="flaticon-381-television"></i>
                    <span class="nav-text">Proposal</span>
                </a>
                
            </li>
            
            </li>
           
            <li><a href="profile" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-settings-2"></i>
                    <span class="nav-text">Profile</span>
                </a>
            </li>
        
            <li><a class="ai-icon" href="settings" >
                    <i class="flaticon-381-layer-1"></i>
                    <span class="nav-text">Settings</span>
                </a>
    
            </li>
        </ul>
        
        <div class="copyright">
            <p><strong>Freelancing Portal freelancer dashboard</strong> © 2021 All Rights Reserved</p>
            <p>Made with <span class="heart"></span> by Ashish,shivom,shivam</p>
        </div>
    </div>
</div>
<!--**********************************
    Sidebar end
***********************************-->