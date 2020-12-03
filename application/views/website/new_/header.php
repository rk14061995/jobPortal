<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/newUi/')?>css/style.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <title>Jobs</title>
    <style type="text/css">
      .edit_info{
        display: none;
      }
      .work_sumryEdit{
        display: none;
      }
      .educaEdit{
        display: none;
      }
      .skilShw{
        display: none;
      }
    </style>
  </head>
  <body>
   <section class=" hedTo">
      <nav class="navbar navbar-expand-lg navbar-light container"  >
  <a class="navbar-brand w_20" href="<?=base_url('Web')?>"><img src="<?=base_url('assets/newUi/')?>images/Logo.png" class="img-fluid "></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse bg_white" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto pl-3">
      <li class="nav-item ">
        <a class="nav-link active" href="<?=base_url('Web')?>">Home </a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="#">Jobs</a>
      </li> -->
      <!--  <li class="nav-item">-->
      <!--  <a class="nav-link" href="#">Candidates</a>-->
      <!--</li>-->
        <li class="nav-item">
        <a class="nav-link" href="<?=base_url('CompLogin')?>">Employers</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="#">Blog</a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact</a>
      </li>
    
      <?php if($userDetail=$this->session->userdata('logged_user_emp')): ?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php 
            $userDetail=unserialize($userDetail);  
              // print_r($userDetail);
            echo $userDetail[0]->fullname; 
           ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?=base_url('User/myProfile')?>">My Profile</a>
          <!-- <a class="dropdown-item" href="#">Another action</a> -->
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?=base_url('User/logout')?>">Log Out</a>
        </div>
      </li>
      <?php endif;?>
    </ul>
    <div class="form-inline my-2 my-lg-0">
     
     <!-- <button class="btn p-3 grenbtn">Recruit With Us</button> -->
     <?php if(!$userDetail=$this->session->userdata('logged_user_emp')): ?>
       <a href="javascript:void(0)" class="logInbtn loginrForm" data-toggle="modal" data-target="#LoginRegModal" ><span><i class="far fa-user"></i></span ><span class="ml-2">Login</span></a>
       <a href="<?=base_url('CompLogin')?>" class="btn p-2 ml-3 grenbtn">Post A Job</a>
     <?php endif;?>
        
    </div>
  </div>
</nav>
</section>
<div class="modal fade" id="LoginRegModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title chngTitle" id="exampleModalLabel1">User Login</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="" id="logFrm">
          <form id="loginFormUser">
            <div class="">
              <label class="form-group w-100">Email 
                <input type="text" placeholder="Email or Mobile Number" name="e_mail" class="form-control">
              </label>
              <label class="form-group w-100">Password
                <input type="password" placeholder="Password" class="form-control" name="p_swd">
              </label>
            </div>

            <div class="text-right"><span class="text-priamry">Forgot Password ?</span></div>
            <button class="btn btn-success srchB w-100">CONTINUE</button>
          </form>

          <div class="mt-4 text-center">
            <span>or <strong class="text-primary text-bold pointer registerForm">Create New Account</strong></span>
          </div>
       </div>

       <div class="" id="regFrm">
          <form class="" id="registerFormUser">
            <div class="">
              <label class="form-group w-100">Name
                <input type="text" placeholder="Enter Your Name" name="f_name" class="form-control">
              </label>
              <label class="form-group w-100">Email
                <input type="email" placeholder="Email or Mobile Number" name="email" class="form-control">
              </label>
              <label class="form-group w-100">Password
                <input type="password" placeholder="Password" name="pass" class="form-control">
              </label>
            </div>

            
            <button class="btn btn-success w-100">CONTINUE</button>
          </form>

          <div class="mt-4 text-center">
            <span>Already a Member ? <strong class="text-primary pointer loginrForm">Login</strong></span>
          </div>
       </div>
      </div>
     <!--  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).on("click",".registerForm",function(){
    $("#logFrm").hide();
    $("#regFrm").show();
    $(".chngTitle").html("Register");
  })
  $(document).on("click",".loginrForm",function(){
    $("#regFrm").hide();
    $("#logFrm").show();
    $(".chngTitle").html("Login");
  })

  $(document).on("click",".registerFormCom",function(){
    $("#logFrmCom").hide();
    $("#regFrmCom").show();
    $(".chngTitleCom").html("Register");
  })
  $(document).on("click",".loginrFormCom",function(){
    $("#regFrmCom").hide();
    $("#logFrmCom").show();
    $(".chngTitleCom").html("Login");
  })
</script>