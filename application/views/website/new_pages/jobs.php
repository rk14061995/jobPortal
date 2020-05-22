
   </section>
   <section class="container-fluid top_banr" >
     <div class="container padT90">
        <div class="W_60">
            <h1 class="fnt700">NEXT STOP... </h1>
        <h1>A JOB YOU LOVE</h1>
        <small class="colgry fnt500">We Have <strong class="colgrn"><?=$total_jobs-1?>+</strong> live jobs adverts helping you to <br>
        find any type of jobs, in any industry, wherever you are based.  
        </small>
          <form action="<?=base_url('Web/getJobs')?>" method="post">
            <div class="d-flex row pl-3 pr-2 py-2 bg-white mx-0 border rounded mt-3">
                  <div class="col-md-4 px-0 mt-2">
                    <label class="fnt700 m-0">What</label><br>
                   <input class="brd_non" name="job_title" placeholder="What jobs you want ?">
                 </div>
                  <div class="col-md-4 px-0 mt-2">
                    <label class="fnt700 m-0">Where</label><br>
                    <input class="brd_non" name="location" placeholder="Location.">
                  </div>
                  <div class="col-md-4 px-0 mt-2 ">
                    <input type="submit" value="Search" class="btn p-3 w-100 grenbtn">
                    <!-- <button class="btn p-3 w-100 grenbtn">Search</button> -->
                  </div>
            </div>
          </form>
          <div class="mt-2">
            <ul class="list-unstyled m-0 d-flex">
                <li>
                  <span><strong class="colgrn">Popular : </strong></span>
                </li>
                <li class="ml-1">
                  <small class="border p-1">App</small>
                </li>
                <li class="ml-1">
                  <small class="border p-1">App</small>
                </li>
            </ul>
          </div>
          <div class=" mt-5">
            <div class="row mx-0 countSec">
              <div class="col-md-3 border-right">
                <div class="">
                  <h2><?=$job_seekers?></h2>
                  <span>CANDIDATES</span>
                </div>
              </div>
              <div class="col-md-3 border-right">
                <div class="">
                  <h2><?=$companies_?></h2>
                  <span>EMPLOYERS</span>
                </div>
              </div>
              <div class="col-md-4">
                <div class="">
                  <h2><?=$job_application?></h2>
                  <span>JOB APPLICATIONS</span>
                </div>
              </div>
            </div>
          </div>
        </div>
     </div>


    <div class="container py-5 mt-5">
      <div class="text-center my-4">
        <span class="colgry">New Jobs</span>
        <h3>New & Random <span class="colgrn">Jobs</span></h3>
      </div>

      <div class="row">
     
        <?php foreach($recentJobs as $rJobs): ?>
          <div class="col-md-3 mt-3">
            <div class="p-3 border boxSHdw text-center">
              <div class="">
                <img src="<?=base_url('assets/companyImages/logo/').$rJobs['job_detail']->company_logo?>" width="100%" height="160px">
                  <span class="premum">PREMIUM</span>
                  <span class="frelncr">Freelancer</span>
                </div>
              <div class="mt-2">
                <h6><?=ucwords($rJobs['job_detail']->job_title)?></h6>
                <small class="colgry fnt500"><?=ucwords(implode(', ', $rJobs['skills']))?>
                </small>

                <div class="dsa_P mt-2">
                    <div class="">
                      <small class="colgrn sadUu"> &#8377;<?=$rJobs['job_detail']->min_annual_sal ?>K - &#8377; <?=$rJobs['job_detail']->max_annaul_sal?>K </small>
                    </div>
                    <div class="">
                      <a class="colgry dsaPb fnt500 btn btn-success" href="">Apply</a>
                      <!-- <small class="colgry dsaPb fnt500"> 7 Open</small> -->
                    </div>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
        <!-- <div class="col-md-3 mt-3">
          <div class="p-3 border boxSHdw text-center">
            <div class="">
              <img src="assets/images/google.jpg">
                <span class="premum">PREMIUM</span>
                <span class="frelncr">Freelancer</span>
              </div>
            <div class="mt-2">
              <h6>Web Designing</h6>
              <small class="colgry fnt500">CSS3, HTML5,Javascript,
                Bootstrap,Jquery
              </small>

              <div class="dsa_P mt-2">
                  <div class="">
                    <small class="colgrn sadUu"> &#8377;3.2K - &#8377;5K </small>
                  </div>
                  <div class="">
                    <small class="colgry dsaPb fnt500"> 7 Open</small>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 mt-3">
          <div class="p-3 border boxSHdw text-center">
            <div class="">
              <img src="assets/images/google.jpg">
                <span class="premum">PREMIUM</span>
                <span class="frelncr">Freelancer</span>
              </div>
            <div class="mt-2">
              <h6>Web Designing</h6>
              <small class="colgry fnt500">CSS3, HTML5,Javascript,
                Bootstrap,Jquery
              </small>

              <div class="dsa_P mt-2">
                  <div class="">
                    <small class="colgrn sadUu"> &#8377;3.2K - &#8377;5K </small>
                  </div>
                  <div class="">
                    <small class="colgry dsaPb fnt500"> 7 Open</small>
                  </div>
              </div>
            </div>
          </div>
        </div> -->
       <!--  <div class="col-md-3 mt-3">
          <div class="p-3 border boxSHdw text-center">
            <div class="">
              <img src="assets/images/google.jpg">
                <span class="premum">PREMIUM</span>
                <span class="frelncr">Freelancer</span>
              </div>
            <div class="mt-2">
              <h6>Web Designing</h6>
              <small class="colgry fnt500">CSS3, HTML5,Javascript,
                Bootstrap,Jquery
              </small>

              <div class="dsa_P mt-2">
                  <div class="">
                    <small class="colgrn sadUu"> &#8377;3.2K - &#8377;5K </small>
                  </div>
                  <div class="">
                    <small class="colgry dsaPb fnt500"> 7 Open</small>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 mt-3">
          <div class="p-3 border boxSHdw text-center">
            <div class="">
              <img src="assets/images/google.jpg">
                <span class="premum">PREMIUM</span>
                <span class="frelncr">Freelancer</span>
              </div>
            <div class="mt-2">
              <h6>Web Designing</h6>
              <small class="colgry fnt500">CSS3, HTML5,Javascript,
                Bootstrap,Jquery
              </small>

              <div class="dsa_P mt-2">
                  <div class="">
                    <small class="colgrn sadUu"> &#8377;3.2K - &#8377;5K </small>
                  </div>
                  <div class="">
                    <small class="colgry dsaPb fnt500"> 7 Open</small>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 mt-3">
          <div class="p-3 border boxSHdw text-center">
            <div class="">
              <img src="assets/images/google.jpg">
                <span class="premum">PREMIUM</span>
                <span class="frelncr">Freelancer</span>
              </div>
            <div class="mt-2">
              <h6>Web Designing</h6>
              <small class="colgry fnt500">CSS3, HTML5,Javascript,
                Bootstrap,Jquery
              </small>

              <div class="dsa_P mt-2">
                  <div class="">
                    <small class="colgrn sadUu"> &#8377;3.2K - &#8377;5K </small>
                  </div>
                  <div class="">
                    <small class="colgry dsaPb fnt500"> 7 Open</small>
                  </div>
              </div>
            </div>
          </div>
        </div> -->
        <!-- <div class="col-md-3 mt-3">
          <div class="p-3 border boxSHdw text-center">
            <div class="">
              <img src="assets/images/google.jpg">
                <span class="premum">PREMIUM</span>
                <span class="frelncr">Freelancer</span>
              </div>
            <div class="mt-2">
              <h6>Web Designing</h6>
              <small class="colgry fnt500">CSS3, HTML5,Javascript,
                Bootstrap,Jquery
              </small>

              <div class="dsa_P mt-2">
                  <div class="">
                    <small class="colgrn sadUu"> &#8377;3.2K - &#8377;5K </small>
                  </div>
                  <div class="">
                    <small class="colgry dsaPb fnt500"> 7 Open</small>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 mt-3">
          <div class="p-3 border boxSHdw text-center">
            <div class="">
              <img src="<?=base_url('assets/newUi/')?>images/google.jpg">
                <span class="premum">PREMIUM</span>
                <span class="frelncr">Freelancer</span>
              </div>
            <div class="mt-2">
              <h6>Web Designing</h6>
              <small class="colgry fnt500">CSS3, HTML5,Javascript,
                Bootstrap,Jquery
              </small>

              <div class="dsa_P mt-2">
                  <div class="">
                    <small class="colgrn sadUu"> &#8377;3.2K - &#8377;5K </small>
                  </div>
                  <div class="">
                    <small class="colgry dsaPb fnt500"> 7 Open</small>
                  </div>
              </div>
            </div>
          </div>
        </div> -->
      </div>

    </div>
  </section>

  <section class="container-fluid my-5 p-0" style="background-repeat: no-repeat;background-size: cover; background: url('<?=base_url('assets/newUi/')?>images/background1.jpg');">
    
    <div class="text-center text-white bacKdl padY70" >
        <h2 class="mb-5">Watch Out <span class="colgrn">Video</span></h2>
       <span class="vidIcon" ><i class="fas fa-play"></i></span>
    </div>
  </section>

  <section class="container py-5 my-5">
       <div class="text-center mt-4 mb-5">
        <span class="colgry">Working Process</span>
        <h3>How It<span class="colgrn">Works</span></h3>
      </div>

      <div class="mt-5 row">
          <div class="col-md-4 mt-4">
            <div class="text-center">
              <div class="">
                <img src="<?=base_url('assets/newUi/')?>images/step-1.png" class="img-fluid">
                <span class="OpcaNm">01</span>
              </div>
              <div class="">
                <span class="fnt700">Create An Account</span><br>
                <small class="colgry fntS14 fnt500">Ready To Yourself To Placed Big Company</small>
              </div>
            </div>
          </div>
          <div class="col-md-4 mt-4">
            <div class="text-center">
              <div class="">
                <img src="<?=base_url('assets/newUi/')?>images/step-2.png" class="img-fluid">
                  <span class="OpcaNm">02</span>
              </div>
              <div class="text-center">
                <span class="fnt700">Search Jobs</span><br>
                <small class="colgry fntS14 fnt500">Search Best Company Near By In Your Area</small>
              </div>
            </div>
          </div>
          <div class="col-md-4 mt-4">
            <div class="text-center">
              <div class="">
                <img src="<?=base_url('assets/newUi/')?>images/step-3.png" class="img-fluid">
                  <span class="OpcaNm">03</span>
              </div>
              <div class="text-center">
                <span class="fnt700">Save & Apply</span><br>
                <small class="colgry fntS14 fnt500">Apply For Best Jobs</small>
              </div>
            </div>
          </div>
  </section>
  <section class="container py-5 my-5">
    <div class="row">
      <div class="col-md-6">
        <div class="">
          <img src="<?=base_url('assets/newUi/')?>images/background1.jpg" class="img-fluid">
        </div>
      </div>
      <div class="col-md-6">
          <div class="">
            <h2>RECRUIT TALENT CANDIDATES</h2>
            <h2 class="fnt700">FASTER WITH PREMIUMHR</h2>

            <div class="mt-3">
              <span class="fnt500 colgry">Outstanding all or part of your Hiring function we are here to help with Rightcandidate</span>

              <ul class="mt-4 list-unstyled ">
                <li>
                  <span class="colgrn fnt700"><i class="fas fa-check"></i></span>
                  <span class="fnt700">Concentrate on your own core business</span>
                </li>
                <li>
                  <span class="colgrn fnt700"><i class="fas fa-check"></i></span>
                  <span class="fnt700">Improve efficiencies by HR resource</span>
                </li>
                <li>
                  <span class="colgrn fnt700"><i class="fas fa-check"></i></span>
                  <span class="fnt700">Access to the very best professionals</span>
                </li>
              </ul>

              <div class="">
                <button class="btn px-3 py-2 grenbtn">Recruit With Us</button>
                  <button class="btn px-3 py-2 grnLightbtn"><span class="ml-n2"><i class="fas fa-play"></i></span>Our Process</button>
              </div>
            </div>

          </div>
      </div>
    </div>
  </section>

  <section class="container py-5 my-5">
    <div class="row">
      <div class="col-md-6">
        <div class="">
          <h3>TRUSTED BY +25,000 USERS</h3>
          <span class="mt-3 colgry fnt500">
            Our client's opinions are <strong>extremely valuable</strong>
            to us which is why we communicate openly with them on a regular basis.

          </span>
          <img src="<?=base_url('assets/newUi/')?>images/testimonial.png" class="img-fluid mt-5">
          <div class=""></div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card brd_non ">
           <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="100000">
    <div class="w-100 carousel-inner" role="listbox">
      <div class="carousel-item active">
        <div class="carousel-caption">
          <div class="border p-4 backTes mt-3">
            <div class="row">
              <div class="col-md-2">
                 <img src="http://via.placeholder.com/200x200" alt="" class="rounded-circle img-fluid">
              </div>
               <div class="col-sm-9">
                  <div class="">
                    <h5 class="m-0 clrblk">Kilian Sanjeev</h5>
                    <span class="colgry">CEO at <span class="colgrn">Alpha Investing</span></span>
                  </div>
                </div>
            </div>
              <div class="mt-3">
                <span class="colgry ">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</span> 
              </div>
          </div>
           <div class="border p-4 backTes mt-3">
            <div class="row">
              <div class="col-md-2">
                 <img src="http://via.placeholder.com/200x200" alt="" class="rounded-circle img-fluid">
              </div>
               <div class="col-sm-9">
                  <div class="">
                    <h5 class="m-0 clrblk">Kilian Sanjeev</h5>
                    <span class="colgry">CEO at <span class="colgrn">Alpha Investing</span></span>
                  </div>
                </div>
            </div>
              <div class="mt-3">
                <span class="colgry ">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</span> 
              </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="carousel-caption">
       <div class="border p-4 backTes mt-3">
            <div class="row">
              <div class="col-md-2">
                 <img src="http://via.placeholder.com/200x200" alt="" class="rounded-circle img-fluid">
              </div>
               <div class="col-sm-9">
                  <div class="">
                    <h5 class="m-0 clrblk">Kilian Sanjeev</h5>
                    <span class="colgry">CEO at <span class="colgrn">Alpha Investing</span></span>
                  </div>
                </div>
            </div>
              <div class="mt-3">
                <span class="colgry ">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</span> 
              </div>
          </div>
          <div class="border p-4 backTes mt-3">
            <div class="row">
              <div class="col-md-2">
                 <img src="http://via.placeholder.com/200x200" alt="" class="rounded-circle img-fluid">
              </div>
               <div class="col-sm-9">
                  <div class="">
                    <h5 class="m-0 clrblk">Kilian Sanjeev</h5>
                    <span class="colgry">CEO at <span class="colgrn">Alpha Investing</span></span>
                  </div>
                </div>
            </div>
              <div class="mt-3">
                <span class="colgry ">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</span> 
              </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="carousel-caption">
        <div class="border p-4 backTes mt-3">
            <div class="row">
              <div class="col-md-2">
                 <img src="http://via.placeholder.com/200x200" alt="" class="rounded-circle img-fluid">
              </div>
               <div class="col-sm-9">
                  <div class="">
                    <h5 class="m-0 clrblk">Kilian Sanjeev</h5>
                    <span class="colgry">CEO at <span class="colgrn">Alpha Investing</span></span>
                  </div>
                </div>
            </div>
              <div class="mt-3">
                <span class="colgry ">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</span> 
              </div>
          </div>
          <div class="border p-4 backTes mt-3">
            <div class="row">
              <div class="col-md-2">
                 <img src="http://via.placeholder.com/200x200" alt="" class="rounded-circle img-fluid">
              </div>
               <div class="col-sm-9">
                  <div class="">
                    <h5 class="m-0 clrblk">Kilian Sanjeev</h5>
                    <span class="colgry">CEO at <span class="colgrn">Alpha Investing</span></span>
                  </div>
                </div>
            </div>
              <div class="mt-3">
                <span class="colgry ">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</span> 
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
    </div>

<!--     <div class="d-flex">
        <div class="px-3 text-center">
          <h5>WE ARE TRUSTED TRUSTED BY</h5>
        </div>
    </div> -->
  </section>

