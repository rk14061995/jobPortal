
<section class=" banr_ol " style="">
    <div class="container bnnTx">
        <h1 class="ojjuj_"> <span><?=$total_jobs?>+</span> Browse Jobs</h1>
        <h6>Find Jobs, Employment & Career Opportunities</h6>
        <form class="sercPL" action="<?=base_url('Web/getJobs')?>" method="post">
            <div class="row p-2 ">
                <div class="col-md-4">
                    <input type="text" value="" name="job_title" class="form-control" placeholder="Keyword e.g. (Job Title)">
                </div>
                <div class="col-md-3">
                    <input type="text" value="" name="location" class="form-control" placeholder="Location e.g. ( City, Country ) ">
                </div>
                <div class="col-md-3">
                    <input type="number" value="" name="exp" class="form-control" placeholder="Experience ">
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-success w-100">
                        <span><i class="fas fa-search"></i></span>Search
                    </button>
                </div>
            </div>      
        </form>
        <div class="my-3 d-flex">
            <span><strong>Trending Keywords : </strong></span>
            <ul class="list-unstyled d-flex ml-2">
                <li>
                    <a href="" class="">ui Designer, </a>
                </li>
            </ul>
        </div>
    </div>
<div class="ihUJNuj ">
    <div class="container">
        <div class="row">
          <?php foreach($cateogires as $cat):?>
           
            <div class="col-md-2 PloomPk " >
                <div class="">
                    <h4><i class="fas fa-shuttle-van"></i></h4>
                    <span><?=$cat['category_details']->category_name?></span>
                    <p>(<?=count($cat['jobs'])?> Jobs)</p>
                </div>
            </div>
          <?php endforeach;?>
            <!--  <div class="col-md-2 PloomPk " >
                <div class="">
                    <h4><i class="fas fa-university"></i></h4>
                    <span>Finance & Banking</span>
                    <p>(22 Jobs)</p>
                </div>
            </div>
             <div class="col-md-2 PloomPk " >
                <div class="">
                    <h4><i class="fas fa-code"></i></h4>
                    <span>IT & Networking</span>
                    <p>(22 Jobs)</p>
                </div>
            </div>
             <div class="col-md-2 PloomPk " >
                <div class="">
                    <h4><i class="fas fa-building"></i></h4>
                    <span>Real Estate</span>
                    <p>(22 Jobs)</p>
                </div>
            </div>
             <div class="col-md-2 PloomPk " >
                <div class="">
                    <h4><i class="fas fa-briefcase"></i></h4>
                    <span>Business Development</span>
                    <p>(22 Jobs)</p>
                </div>
            </div>
            <div class="col-md-2 PloomPk " >
                <div class="">
                    <h4><i class="fas fa-microchip"></i></h4>
                    <span>Technical Support</span>
                    <p>(22 Jobs)</p>
                </div>
            </div> -->
        </div>
    </div>
</div>
</section>


<section class="container my-4">
    <div class="text-center my-5">
        <h3 class="text_up Unft_X">Top companies hiring now</h3>
    </div>
    <div class="row">
      <?php foreach($companies as $comp):?>
        <div class="col-md-2">
            <img src="<?=base_url('assets/companyImages/logo/').$comp->company_logo?>" class="img-fluid" width="100%">
        </div>
      <?php endforeach; ?>
        <!-- <div class="col-md-2">
            <img src="assets/images/genpact.png" class="img-fluid">
        </div>
        <div class="col-md-2">
            <img src="assets/images/cms.png" class="img-fluid">
        </div>
        <div class="col-md-2">
            <img src="assets/images/atlastravels.png" class="img-fluid">
        </div>
        <div class="col-md-2">
            <img src="assets/images/hew.png" class="img-fluid">
        </div>
        <div class="col-md-2">
            <img src="assets/images/icici.png" class="img-fluid">
        </div> -->
    </div>
    <!--  <div class="row mt-3">
        <div class="col-md-2">
            <img src="assets/images/max.png" class="img-fluid">
        </div>
        <div class="col-md-2">
            <img src="assets/images/nit.png" class="img-fluid">
        </div>
        <div class="col-md-2">
            <img src="assets/images/reli.png" class="img-fluid">
        </div>
        <div class="col-md-2">
            <img src="assets/images/reliance.png" class="img-fluid">
        </div>
        <div class="col-md-2">
            <img src="assets/images/sbi.png" class="img-fluid">
        </div>
        <div class="col-md-2">
            <img src="assets/images/tech.png" class="img-fluid">
        </div>
    </div> -->
</section>

<section class="container my-4">
    <div class="text-center my-5">
        <h3 class="text_up Unft_X">Popular Categories</h3>
    </div>
    <div class="row"> 
        
        <?php foreach($cateogires as $cat):?>
            <a href="search_results.php" class="col-md-3 Ploom " >
                <div class="">
                    <div class="">
                    <h2><i class="fas fa-shuttle-van"></i></h2>
                    <span><?=$cat['category_details']->category_name?></span>
                    <p>(<?=count($cat['jobs'])?> Jobs)</p>
                </div>
                </div>
            </a>
        <?php endforeach;?>
            <!-- <a href="search_results.php" class="col-md-3 Ploom " >
                <div class="">
                  <h2><i class="fas fa-university"></i></h2>
                    <span>Finance & Banking</span>
                    <p>(22 Jobs)</p>
                </div>
            </a>
            <a href="search_results.php" class="col-md-3 Ploom " >
                <div class="">
                    <h2><i class="fas fa-code"></i></h2>
                    <span>IT & Networking</span>
                    <p>(22 Jobs)</p>
                </div>
            </a>
             <a href="search_results.php" class="col-md-3 Ploom " >
                <div class="">
                   <h2><i class="fas fa-building"></i></h2>
                    <span>Real Estate</span>
                    <p>(22 Jobs)</p>
                </div>
            </a>
             <a href="search_results.php" class="col-md-3 Ploom " >
                <div class="">
                   <h2><i class="fas fa-briefcase"></i></h2>
                    <span>Business Development</span>
                    <p>(22 Jobs)</p>
                </div>
            </a>
             <a href="search_results.php" class="col-md-3 Ploom " >
                <div class="">
                     <h2><i class="fas fa-microchip"></i></h2>
                    <span>Technical Support</span>
                    <p>(22 Jobs)</p>
                </div>
            </a>
             <a href="search_results.php" class="col-md-3 Ploom " >
                <div class="">
                    <h2><i class="fas fa-fire-extinguisher"></i></h2>
                    <span>Defence & Fire Service</span>
                    <p>(22 Jobs)</p>
                </div>
            </a>
             <a href="search_results.php" class="col-md-3 Ploom " >
                <div class="">
                    <h2><i class="fas fa-briefcase"></i></h2>
                    <span>HR & Industrial Relations</span>
                    <p>(22 Jobs)</p>
                </div>
            </a> -->
        </div>
</section>


<!-- tabs -->
<section class="container my-4">
    
    <div class="row">
        <div class="col-md-9">
            <div class="text-center my-5">
                <h3 class="Unft_XW">Featured Jobs</h3>
            </div>
            <nav>
                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#Featured" role="tab" aria-controls="nav-home" aria-selected="true">FEATURED</a>
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#part_time" role="tab" aria-controls="nav-profile" aria-selected="false">PART TIME</a>
                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#full_time" role="tab" aria-controls="nav-contact" aria-selected="false">FULL TIME</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active p-3" id="Featured" role="tabpanel" aria-labelledby="nav-home-tab">
                   
                  <?php foreach($fullTimeJobs as $f_job): ?>
                   <div class="row pjikK">
                       <div class="col-md-2">
                            <img src="<?=base_url('assets/companyImages/logo/').$f_job->company_logo?>" class="img-fluid" width="100%">
                       </div>
                       <div class="col-md-5">
                          <h6 class="m-0"><?=$f_job->job_title?></h6>
                          <span><?=$f_job->company_name?></span>
                       </div>
                       <div class="col-md-3">
                          <span><?=$f_job->company_name?></span>
                       </div>
                       <div class="col-md-2">
                            <button class="btn btn-default border">Apply</button>
                       </div>
                   </div>
                  <?php endforeach;?>
                </div>
                <div class="tab-pane fade p-3" id="part_time" role="tabpanel" aria-labelledby="nav-profile-tab">
                  <?php 
                    // print_r($partTimeJobs);
                  ?>
                  <?php foreach($partTimeJobs as $f_job): ?>
                   <div class="row pjikK">
                       <div class="col-md-2">
                            <img src="<?=base_url('assets/companyImages/logo/').$f_job->company_logo?>" class="img-fluid" width="100%">
                       </div>
                       <div class="col-md-5">
                          <h6 class="m-0"><?=$f_job->job_title?></h6>
                          <span><?=$f_job->company_name?></span>
                       </div>
                       <div class="col-md-3">
                          <span><?=$f_job->company_name?></span>
                       </div>
                       <div class="col-md-2">
                            <button class="btn btn-default border">Apply</button>
                       </div>
                   </div>
                  <?php endforeach;?>
                </div>
                <div class="tab-pane fade p-3" id="full_time" role="tabpanel" aria-labelledby="nav-contact-tab">
                  <?php 
                    // print_r($fullTimeJobs);
                  ?>
                  <?php foreach($fullTimeJobs as $f_job): ?>
                   <div class="row pjikK">
                       <div class="col-md-2">
                            <img src="<?=base_url('assets/companyImages/logo/').$f_job->company_logo?>" class="img-fluid" width="100%">
                       </div>
                       <div class="col-md-5">
                          <h6 class="m-0"><?=$f_job->job_title?></h6>
                          <span><?=$f_job->company_name?></span>
                       </div>
                       <div class="col-md-3">
                          <span><?=$f_job->company_name?></span>
                       </div>
                       <div class="col-md-2">
                            <button class="btn btn-default border">Apply</button>
                       </div>
                   </div>
                  <?php endforeach;?>
                   <!-- <div class="row pjikK">
                       <div class="col-md-2">
                            <img src="assets/images/sbi.png" class="img-fluid">
                       </div>
                       <div class="col-md-5">
                          <h6 class="m-0">Web Designer / Developer</h6>
                          <span>SBI Bank</span>
                       </div>
                       <div class="col-md-3">
                          <span>SBI Bank</span>
                       </div>
                       <div class="col-md-2">
                            <button class="btn btn-default border">Apply</button>
                       </div>
                   </div> -->
                </div>
            </div>
        </div>
        <div class="col-md-3 p-2">
            <div class="card text-white border text-center bg-dark p-5 mt-5 ressM_">
                <h3>Logo</h3>
                <h5 class="my-4">Get Best Matched Jobs On your Email. Add Resume NOW!</h5>
                <button class="btn btn-default">ADD RESUME</button>
            </div>
        </div>
    </div>
</section>
<section class="banr_ol container-fluid">
<div class="container content my-4 ">
     <div class="text-center pt-5">
        <h3 class="text-white text_up Unft_X">Our Testimonials</h3>
    </div>
  <div class="card back_trsa">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="100000">
    <div class="w-100 carousel-inner" role="listbox">
      <div class="carousel-item active">
        <div class="carousel-caption">
          <div class="row">
            <div class="col-sm-2">
              <img src="http://via.placeholder.com/200x200" alt="" class="rounded-circle img-fluid"/>
            </div>
            <div class="col-sm-9">
              <h3>Gives me hope</h3>
              <small>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</small>
              <small class="smallest mute">- Yayo Dudemous</small>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="carousel-caption">
          <div class="row">
            <div class="col-sm-2">
              <img src="http://via.placeholder.com/200x200" alt="" class="rounded-circle img-fluid">
            </div>
            <div class="col-sm-9">
              <h3>You will love it.</h3>
              <small>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</small>
              <small class="smallest mute">- Yayo Dudemous</small>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="carousel-caption">
          <div class="row">
            <div class="col-sm-2">
              <img src="http://via.placeholder.com/200x200" alt="" class="rounded-circle img-fluid">
            </div>
            <div class="col-sm-9">
              <h3>Velvet pouch!</h3>
              <small>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</small>
              <small class="smallest mute">- Yayo Dudemous</small>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="float-right navi mb-4">
    <a class="" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon ico" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon ico" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    </div>
  </div>
</div>
</div>
</section>

<section class="container my-4 py-5">
    <div class="row">
        <div class="col-md-7">
            <h3 class="mb-3">Get instant job alerts from top companies</h3>
            <span>Be the first one to apply to jobs</span>

            <div class="row mt-4 m-0 rounded" style="padding: 7px;    box-shadow: 0px 0px 7px 1px #0000005c;">
                <div class="col-md-1 p-0">
                    <div style="margin: 7px 1px;">+ 91</div>
                </div>
                <div class="col-md-8 p-0">
                    <input class="form-control" placeholder="Mobile" name="" type="number" style="border:none">
                </div>
                <div class="col-md-3">
                    <button class="btn btn-default border w-100 bhyb__u">Get App</button>
                </div>
            </div>

            <div class="mt-5 ">
                <a href="" class="iOjj_ bg-white"><img src="assets/images/gplay.png" class=""></a>
            </div>
        </div>
</section>
<script type="text/javascript">
  $(document).ready(function(){
    $('.sercPssL').on('submit',function(e){
      e.preventDefault();
      var formData=new FormData($(this)[0]);
      console.log("Working Fine");
      $.ajax({
        url:"<?=base_url('Web/getJobs')?>",
        type:"post",
        cache:false,
        contentType:false,
        processData:false,
        data:formData,
        success:function(response){
          console.log(response);
          // response=JSON.parse(response);
          // if(response.code==1){
          //   swal("Great..","Registered Successfully.","success");
          // }else{
          //   swal("Ooops..","Something went wrong","warning");
          // }
        }
      });
    });
  });
</script>
