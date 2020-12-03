<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description">
    <meta name="keywords">
    <meta name="author" content="ThemeSelect">
    <title>Job Portal</title>
    <link rel="apple-touch-icon" href="<?=base_url()?>theme-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?=base_url()?>assets/images/Xhirez-Logo.2fb87e48.png">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>theme-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>theme-assets/vendors/css/charts/chartist.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>theme-assets/css/app-lite.css">
    <!-- END CHAMELEON  CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>theme-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>theme-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>theme-assets/css/pages/dashboard-ecommerce.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <!-- END Custom CSS-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
   <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  <style>
  .content .content-wrapper .content-wrapper-before{
    width:auto !important;
    height:auto !important;
  }
  #gradient-line-chart1{
    height:auto !important;
  }
  </style>
  </head>
  <body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-chartbg" data-col="2-columns">

    <!-- fixed-top-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
      <div class="navbar-wrapper">
        <div class="navbar-container content">
          <div class="collapse navbar-collapse show" id="navbar-mobile">
            <ul class="nav navbar-nav mr-auto float-left">
              <li class="nav-item d-block d-md-none"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
              <!-- <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li> -->
              <!-- <li class="nav-item dropdown navbar-search"><a class="nav-link dropdown-toggle hide" data-toggle="dropdown" href="#"><i class="ficon ft-search"></i></a>
                <ul class="dropdown-menu">
                  <li class="arrow_box">
                    <form>
                      <div class="input-group search-box">
                        <div class="position-relative has-icon-right full-width">
                          <input class="form-control" id="search" type="text" placeholder="Search here...">
                          <div class="form-control-position navbar-search-close"><i class="ft-x">   </i></div>
                        </div>
                      </div>
                    </form>
                  </li>
                </ul>
              </li> -->
            </ul>
           <!--  <ul class="nav navbar-nav float-right">         
              <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span class="selected-language"></span></a>
                <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                  <div class="arrow_box"><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-us"></i> English</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-cn"></i> Chinese</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-ru"></i> Russian</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-es"></i> Spanish</a></div>
                </div>
              </li>
            </ul> -->
            <ul class="nav navbar-nav float-right">
              <!-- <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-mail">             </i></a>
                <div class="dropdown-menu dropdown-menu-right">
                  <div class="arrow_box_right"><a class="dropdown-item" href="#"><i class="ft-book"></i> Read Mail</a><a class="dropdown-item" href="#"><i class="ft-bookmark"></i> Read Later</a><a class="dropdown-item" href="#"><i class="ft-check-square"></i> Mark all Read       </a></div>
                </div>
              </li> -->
              <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">             <span class="avatar avatar-online"><img src="<?=base_url()?>theme-assets/images/portrait/small/avatar-s-19.png" alt="avatar"><i></i></span></a>
                <div class="dropdown-menu dropdown-menu-right">
                  <div class="arrow_box_right"><a class="dropdown-item" href="#"><span class="avatar avatar-online"><img src="<?=base_url()?>theme-assets/images/portrait/small/avatar-s-19.png" alt="avatar"><span class="user-name text-bold-700 ml-1">Admin</span></span></a>
                    <div class="dropdown-divider"></div>
                  <!--   <a class="dropdown-item" href="#"><i class="ft-user"></i> Edit Profile</a>
                    <a class="dropdown-item" href="#"><i class="ft-mail"></i> My Inbox</a>
                    <a class="dropdown-item" href="#"><i class="ft-check-square"></i> Task</a>
                    <a class="dropdown-item" href="#"><i class="ft-message-square"></i> Chats</a> -->
                    <div class="dropdown-divider"></div><a class="dropdown-item" href="<?=base_url('Admin_Login/logOut')?>"><i class="ft-power"></i> Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="theme-assets/images/backgrounds/02.jpg">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">       
          <li class="nav-item mr-auto"><a class="navbar-brand" href="<?=base_url('Admin_Dashboard/viewDashbaord')?>"><img class="brand-logo" alt="Chameleon admin logo" style="width:105px !important"  src="<?=base_url()?>assets/images/Xhirez-Logo.2fb87e48.png"/>
              </a></li>
          <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
        </ul>
      </div>
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <li class="active"><a href="<?=base_url('Admin_Dashboard/viewDashbaord')?>"><i class="ft-home"></i><span class="menu-title" data-i18n="">Dashboard</span></a>
          </li>
          <li>
            <a href="<?=base_url('Admin_Dashboard/addJobType')?>" class="nav-link " >
            <i class="ft-layout"></i>Job Type
            </a>
          </li>
          <li>
            <a href="<?=base_url('Admin_Dashboard/addJobCategory')?>" class="nav-link " >
            <i class="ft-layout"></i>Job Category
            </a>
          </li>
          <li>
            <a href="<?=base_url('Admin_Dashboard/addJobSkills')?>" class="nav-link " >
            <i class="ft-layout"></i>Skills
            </a>
          </li>
           
         
           <li class=" nav-item "><a href="#" class="nav-link dropdown-toggle" >
            <i class="ft-layout"></i><span class="menu-title" data-i18n="">Job </span>
            </a>
            <ul>
              
              <li> <a class="dropdown-item" href="<?=base_url('Admin_Dashboard/addJob')?>"><i class="fa fa-eye" aria-hidden="true"></i> <strong>Add</strong></a></li>
              <li><a class="dropdown-item" href="<?=base_url('Admin_Dashboard/view_Job')?>"><i class="fa fa-plus" aria-hidden="true"></i> <strong>View</strong></a></li>
            </ul>
          </li> 
           <li class=" nav-item "><a href="#" class="nav-link dropdown-toggle" >
            <i class="ft-layout"></i><span class="menu-title" data-i18n="">Plan Type</span>
            </a>
            <ul>
              
              <li> <a class="dropdown-item" href="<?=base_url('Admin_Dashboard/addCompanyType')?>"><i class="fa fa-eye" aria-hidden="true"></i> <strong>Add</strong></a></li>
              <li><a class="dropdown-item" href="<?=base_url('Admin_Dashboard/view_CompanyType')?>"><i class="fa fa-plus" aria-hidden="true"></i> <strong>View</strong></a></li>
            </ul>
          </li>
           <li class=" nav-item "><a href="#" class="nav-link dropdown-toggle" >
            <i class="ft-layout"></i><span class="menu-title" data-i18n="">Company </span>
            </a>
            <ul>
              
              <li> <a class="dropdown-item" href="<?=base_url('Admin_Dashboard/addCompany')?>"><i class="fa fa-eye" aria-hidden="true"></i> <strong>Add</strong></a></li>
              <li><a class="dropdown-item" href="<?=base_url('Admin_Dashboard/viewCompany')?>"><i class="fa fa-plus" aria-hidden="true"></i> <strong>View</strong></a></li>
            </ul>
          </li>
           <li class=" nav-item "><a href="#" class="nav-link dropdown-toggle" >
            <i class="ft-layout"></i><span class="menu-title" data-i18n="">Success Stories</span>
            </a>
            <ul>
              
              <li> <a class="dropdown-item" href="<?=base_url('Admin_Dashboard/addStory')?>"><i class="fa fa-eye" aria-hidden="true"></i> <strong>Add</strong></a></li>
              <li><a class="dropdown-item" href="<?=base_url('Admin_Dashboard/viewStory')?>"><i class="fa fa-plus" aria-hidden="true"></i> <strong>View</strong></a></li>
            </ul>
          </li> 
           <li class=" nav-item "><a href="#" class="nav-link dropdown-toggle" >
            <i class="ft-layout"></i><span class="menu-title" data-i18n="">Message</span>
            </a>
            <ul>
              
              <li> <a class="dropdown-item" href="<?=base_url('Admin_Dashboard/addUserMessage')?>"><i class="fa fa-eye" aria-hidden="true"></i> <strong>Add UserMsg</strong></a></li>
               <li> <a class="dropdown-item" href="<?=base_url('Admin_Dashboard/addCompanyMessage')?>"><i class="fa fa-eye" aria-hidden="true"></i> <strong>Add CompanyMsg</strong></a></li>
              <li><a class="dropdown-item" href="<?=base_url('Admin_Dashboard/addCompanyMessage')?>"><i class="fa fa-plus" aria-hidden="true"></i> <strong>View</strong></a></li>
            </ul>
          </li> 
          
           <li class=" nav-item "><a href="#" class="nav-link dropdown-toggle" >
          	<i class="ft-layout"></i><span class="menu-title" data-i18n="">Job Seekers</span>
            </a>
            <ul>
            	
            <!-- 	<li> <a class="dropdown-item" href="<?=base_url('Admin_Dashboard/addJobSeekerView')?>"><i class="fa fa-eye" aria-hidden="true"></i> <strong>Add</strong></a></li> -->
              <li><a class="dropdown-item" href="<?=base_url('Admin_Dashboard/viewJobSeeker')?>"><i class="fa fa-plus" aria-hidden="true"></i> <strong>View</strong></a></li>
            </ul>
          </li>  
           <li class=" nav-item "><a href="#" class="nav-link dropdown-toggle" >
            <i class="ft-layout"></i><span class="menu-title" data-i18n="">Seekers Apps</span>
            </a>
            <ul>
              <li><a class="dropdown-item" href="<?=base_url('Admin_Dashboard/viewSeekerApps')?>"><i class="fa fa-plus" aria-hidden="true"></i> <strong>View</strong></a></li>
            </ul>
          </li>  
          <li class=" nav-item "><a href="#" class="nav-link dropdown-toggle" >
            <i class="ft-layout"></i><span class="menu-title" data-i18n="">Multiple email</span>
            </a>
            <ul>
              <li><a class="dropdown-item" href="<?=base_url('Admin_Dashboard/addMultipleMails')?>"><i class="fa fa-plus" aria-hidden="true"></i> <strong>Send</strong></a></li>
            </ul>
          </li>
          <!-- <li class=" nav-item "><a href="#" class="nav-link dropdown-toggle" >
            <i class="ft-layout"></i><span class="menu-title" data-i18n="">Job Application</span>
            </a>
            <ul>
              <li><a class="dropdown-item" href="<?=base_url('')?>"><i class="fa fa-plus" aria-hidden="true"></i> <strong>View</strong></a></li>
              <li> <a class="dropdown-item" href="<?=base_url('')?>"><i class="fa fa-eye" aria-hidden="true"></i> <strong>Add</strong></a></li>
            </ul>
          </li>  -->
         
        </ul>
      </div>
      <div class="navigation-background"></div>
    </div>