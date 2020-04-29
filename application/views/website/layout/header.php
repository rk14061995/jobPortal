<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Job Portal</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/web_assets/')?>css/style.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
<style>
 .onuNJ{
        position: fixed;
    top: 0px;
    z-index: 122;
    background: #ffffff73;
 }
nav ul {
  list-style: none;
  text-align: center;
}
nav ul li {
  display: inline-block;
}
nav ul li a {
  display: block;
  padding: 15px;
  text-decoration: none;
  /*color:white;*/
  color:#333738d1;
  font-weight: 800;
  text-transform: uppercase;
  margin: 0 10px;
}
nav ul li a,
nav ul li a:after,
nav ul li a:before {
  transition: all .5s;
}
nav ul li a:hover {
  /*color: #555;*/
  color:black;
}


/* stroke */
nav.stroke ul li a,
nav.fill ul li a {
  position: relative;
}
nav.stroke ul li a:after,
nav.fill ul li a:after {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  margin: auto;
  width: 0%;
  content: '.';
  color: transparent;
  /*background: #aaa;*/
  background: #333738d1;
  height: 1px;
}
nav.stroke ul li a:hover:after {
  width: 100%;
}

nav.fill ul li a {
  transition: all 2s;
}

nav.fill ul li a:after {
  text-align: left;
  content: '.';
  margin: 0;
  opacity: 0;
}
nav.fill ul li a:hover {
  color: #fff;
  z-index: 1;
}
nav.fill ul li a:hover:after {
  z-index: -10;
  animation: fill 1s forwards;
  -webkit-animation: fill 1s forwards;
  -moz-animation: fill 1s forwards;
  opacity: 1;
}


/* Keyframes */
@-webkit-keyframes fill {
  0% {
    width: 0%;
    height: 1px;
  }
  50% {
    width: 100%;
    height: 1px;
  }
  100% {
    width: 100%;
    height: 100%;
    background: #333;
  }
}

/* Keyframes */
@-webkit-keyframes circle {
  0% {
    width: 1px;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    margin: auto;
    height: 1px;
    z-index: -1;
    background: #eee;
    border-radius: 100%;
  }
  100% {
    background: #aaa;
    height: 5000%;
    width: 5000%;
    z-index: -1;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    margin: auto;
    border-radius: 0;
  }
}
#regFrm{
  display: none;
}
#regFrmCom{
  display: none;
}
.pointer{
  cursor:  pointer
}
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

  <section class="onuNJ">
    <nav class="navbar navbar-expand-lg ">
  <a class="navbar-brand w-25" href="<?=base_url('Web')?>"><img src="<?=base_url('assets/web_assets/')?>images/logo.png" class="img-fluid w-25" ></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
    <nav class="stroke">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item home">
        <a class="nav-link" href="<?=base_url('Web')?>">Home </a>
      </li>
      <li class="nav-item about">
        <a class="nav-link" href="<?=base_url('About')?>">About-Us</a>
      </li>
      <li class="nav-item services">
        <a class="nav-link" href="<?=base_url('Services')?>">Our Services</a>
      </li>
      <li class="nav-item contact">
        <a class="nav-link" href="<?=base_url('Contact')?>">Contact-Us</a>
      </li>
      <?php  
        // print_r($this->session->userdata('logged_user_emp'));
      ?>
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
            <!-- <a class="dropdown-item" href="saved_jobs.php">My Favorite </a> -->
            <a class="dropdown-item" href="<?=base_url('User/logout')?>">Logout</a>
            <!-- <a class="dropdown-item" href="myprofile.php">My Profile</a>
            <a class="dropdown-item" href="saved_jobs.php">My Favorite </a>
            <a class="dropdown-item" href="#">Logout</a> -->
        </li>
      <?php endif;?>
    </ul>
  </nav>
    <div class="form-inline my-2 ml-2 my-lg-0">
       <button class="border btn btn-default bhyb__u" data-toggle="modal" data-target="#LoginRegModal" >SignUp/Login for User</button>
       <a href="<?=base_url('CompLogin')?>" class="border btn btn-default bhyb__u ml-3">Company</a>
         <!-- <button class="border btn btn-default bhyb__u ml-3" data-toggle="modal" data-target="#ComLoginRegModal">SignUp/Login for Company</button> -->
    </div>
  </div>
</nav>
  </section>
<!-- data-toggle="modal" data-target="#LoginRegModal"
<section class="container-fluid onuNJ">
    <div class="row">
        <div class="col-md-2 col-lg-2 col-sm-10">
            <img src="assets/images/logo.png" class="img-fluid" >
        </div>
        <div class="col-md-8 text-right">
            <div class="">
                 <nav class="stroke">
                    <ul>
                      <li><a href="#">Home</a></li>
                      <li><a href="#">About</a></li>
                      <li><a href="#">Downloads</a></li>
                      <li><a href="#">More</a></li>
                      <li><a href="#">Nice staff</a></li>
                    </ul>
                  </nav>
            </div>
        </div>
        <div class="col-md-2">
            <div class="">
                <button class="border btn btn-default" data-toggle="modal" data-target="#LoginRegModal">Register/Login</button>
              
            </div>
        </div>
    </div>
</section> -->





<!-- Login Modal -->

<!-- Modal -->

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

<div class="modal fade" id="ComLoginRegModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title chngTitleCom" id="exampleModalLabel">Login</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="" id="logFrmCom">
          <form class="">
            <div class="">
              <label class="form-group w-100">Email or Mobile Number
                <input type="text" placeholder="Email or Mobile Number" class="form-control">
              </label>
              <label class="form-group w-100">Password
                <input type="password" placeholder="Password" class="form-control">
              </label>
            </div>

            <div class="text-right"><span class="text-priamry">Forgot Password ?</span></div>
            <button class="btn btn-success w-100">CONTINUE</button>
          </form>

          <div class="mt-4 text-center">
            <span>or <strong class="text-primary text-bold pointer registerFormCom">Create New Account</strong></span>
          </div>
       </div>

       <div class="" id="regFrmCom">
          <form class="">
            <div class="">
              <label class="form-group w-100">Email or Mobile Number
                <input type="text" placeholder="Email or Mobile Number" class="form-control">
              </label>

              <label class="form-group w-100">OTP Verification
                <input type="text" placeholder="Enter Received OTP" class="form-control">
              </label>
              

              <label class="form-group w-100">Password
                <input type="password" placeholder="Password" class="form-control">
              </label>
            </div>

            
            <button class="btn btn-success w-100">CONTINUE</button>
          </form>

          <div class="mt-4 text-center">
            <span>Already a Member ? <strong class="text-primary pointer loginrFormCom">Login</strong></span>
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