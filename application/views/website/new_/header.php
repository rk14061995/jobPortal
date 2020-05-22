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
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/newUi/')?>css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <title>Jobs</title>
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
        <li class="nav-item">
        <a class="nav-link" href="#">Candidates</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="<?=base_url('CompLogin')?>">Employers</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="#">Blog</a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact</a>
      </li>
   <!--    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->
      
    </ul>
    <div class="form-inline my-2 my-lg-0">
     
     <!-- <button class="btn p-3 grenbtn">Recruit With Us</button> -->
     <a href="" class="logInbtn"><span><i class="far fa-user"></i></span ><span class="ml-2">Login</span></a>
        <a href="<?=base_url('CompLogin')?>" class="btn p-2 ml-3 grenbtn">Post A Job</a>
    </div>
  </div>
</nav>
</section>
