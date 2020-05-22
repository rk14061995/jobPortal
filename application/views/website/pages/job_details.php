
<!-- <section class="container-fluid banr_ol">
	<div class="container">
		<form class="sercPL">
            <div class="row p-2 ">
                <div class="col-md-4">
                    <input type="text" value="" class="form-control" placeholder="Keyword e.g. (Job Title)">
                </div>
                <div class="col-md-3">
                    <input type="text" value="" class="form-control" placeholder="Location e.g. ( City, Country ) ">
                </div>
                <div class="col-md-3">
                    <input type="number" value="" class="form-control" placeholder="Experience ">
                </div>
                <div class="col-md-2">
                    <button class="btn btn-success w-100">
                        <span><i class="fas fa-search"></i></span>Search
                    </button>
                </div>
            </div>      
        </form>
    </div>
</section>	
 -->
<div class="container  py-3">
	<div class="row">
		<div class="col-md-9">
			<div class="p-1"> 
				<ul class="list-unstyled d-flex job_hd mb-2" >
					<li><a href="">Jobs</a><span> / </span></li>
					<li><a href="">Job Search </a><span> / </span></li>
					<li><a href="">Jobs in <?=ucwords($JobsDetail[0]['job_detail']->job_location_)?></a><span> / </span></li>
					<li><?=ucwords($JobsDetail[0]['job_detail']->job_title)?> Jobs in <?=ucwords($JobsDetail[0]['job_detail']->job_location_)?></li>
				</ul>
			</div>
	<div class="border p-3">
	

	<div class=" p-3 ">
		<div class="m-0 row">
			<div class="col-md-8">
				<h4 class=" txt_X"><?=ucwords($JobsDetail[0]['job_detail']->job_title)?></h4>
				<span><?=ucwords($JobsDetail[0]['job_detail']->company_name)?></span><br>
				
				<ul class="d-flex m-0 ml-2 px-3">
					<li><small>Min. <?=$JobsDetail[0]['job_detail']->exp?> Yrs</small></li>
					<li class="ml-5"><small><?=ucwords($JobsDetail[0]['job_detail']->job_location_)?></small></li>
				</ul>
			</div>
			<div class="col-md-4 text-right">
				<small>Posted on: <?=date('d-m-Y',strtotime($JobsDetail[0]['job_detail']->adde_on))?></small>
				
			</div>
		</div>
		<div class="px-3"><small>Required <?=ucwords($JobsDetail[0]['job_detail']->job_title)?> Key Skills required - <?=ucwords(implode(',',$JobsDetail[0]['skills']))?></small>
		</div>
		<hr>
		<div class="row m-0">
			<div class="col-md-7">
				<small><strong>Skills : </strong><?=ucwords(implode(',',$JobsDetail[0]['skills']))?></small>
				<br>
				
				
			</div>
			<div class="col-md-5 text-right">
				<a href="<?=$JobsDetail[0]['job_detail']->website_url?>" class="btn btn-default border">Apply on Website</a>
				<?php 
					if($userDetail=$this->session->userdata('logged_user_emp')){
						echo '<a href="javascript:void(0)" class="btn btn-success" id="applyNow" job_id="'.$JobsDetail[0]['job_detail']->job_id.'">Apply Now</a>';
					}else{
						echo '<a href="javascript:void(0)" class="btn btn-success" data-toggle="modal" data-target="#LoginRegModal">Apply Now</a>';
						
					} 
				?>
				
				<!-- <span><small><i class="far fa-star"></i> Save</small> </span> -->
			</div>
		</div>
		<hr>
		<div class="px-3">
			<h5>Job Description</h5>
			<p>
				Required <?=ucwords($JobsDetail[0]['job_detail']->job_title)?> Key Skills required - <?=ucwords(implode(',',$JobsDetail[0]['skills']))?>		
			</p>
			<p>Required.: <?=ucwords(implode(',',$JobsDetail[0]['skills']))?></p>
			<p>Job Type: <?=ucwords($JobsDetail[0]['job_detail']->type_name)?></p>
			<p>Required Experience: <?=$JobsDetail[0]['job_detail']->exp?></p>
			<p>Location: <?=ucwords($JobsDetail[0]['job_detail']->job_location_)?></p>
			<p>Job Description: <?=ucfirst($JobsDetail[0]['job_detail']->job_desc)?></p>	







<!-- Key Skills required -  Excellent Knowledge of PHP , Ajax , MySQL , MySQLI , Jquery , XML , HTML5 , CSS3 Required.: Strong knowledge of Responsive Web Designing , Magento , Opencart Template , WordPress theme , Plugin Development. Job Type:Full - time Required Experience: Fresher Location:SD Block Market ,  Pitampura , New Delhi 110034 Apply Now Job Applied in Synergy 

Full Name (required) 

Email address (required) 

Mobile Number (required)  -->
			<!-- </p> -->

			<div class="my-2">
				<h5>Other details</h5>
				<ul class="list-unstyled List_oj">
					<li class="row">
						<span class="col-md-3">
							Department :
						</span>
						<span class="col-md-9 "><?=ucwords($JobsDetail[0]['job_detail']->job_title)?></span>
					</li>
					<li class="row">
						<span class="col-md-3 ">
							Industry :
						</span>
						<span class="col-md-9 "><?=ucwords($JobsDetail[0]['job_detail']->category_name)?></span>
					</li>
					<li class="row">
						<span class="col-md-3">
							Skills :
						</span>
						<span class="col-md-9 Lias__"><?=ucwords(implode(',',$JobsDetail[0]['skills']))?></span>
					</li>
				</ul>
			</div>	
			<div class="my-2">
				<h5>Recruiter details</h5>
				<div class="">
					<span>Company Name : <small><?=ucwords($JobsDetail[0]['job_detail']->company_name)?></small></span><br>
					<span>Comapny Description : <small><?=ucfirst($JobsDetail[0]['job_detail']->comp_desc)?> (Address: <?=$JobsDetail[0]['job_detail']->comp_address?>)</small></span>
				</div>
			</div>
		</div>
	</div>
	
</div>
	
	<!-- <div class="my-5">
		<h4 class="mb-4">Similar Jobs</h4>

		<div class="">
		
			<a href="" class="border p-3 JJH_j">
				<div class="m-0 row">
					<div class="col-md-8">
						<h5 class="m-0 txt_X">Web Developer</h5>
						<span>SYNERGY WEB DESIGNERS</span><br>
						
						<ul class="d-flex m-0 ml-2 px-3">
							<li><small> 2 to 5 Yrs</small></li>
							<li class="ml-5"><small>Delhi</small></li>
						</ul>
					</div>
					<div class="col-md-4 text-right">
						<small>date</small>
					</div>
				</div>
				<div class="px-3"><small>Required Web Developer Key Skills required - Excellent Knowledge of PHP , Ajax , MySQL , MySQLI , Jquery , XML , HTML5 , CSS3</small>
				</div>
				<hr>
				<div class="row m-0">
					<div class="col-md-8">
						<small><strong>Skills : </strong>web designing, css, html, javascript, jquery</small>
					</div>
					<div class="col-md-4 text-right">
						<div class="btn btn-default border">Apply</div>
					</div>
				</div>
			</a>
			<a href="" class="border p-3 JJH_j">
				<div class="m-0 row">
					<div class="col-md-8">
						<h5 class="m-0 txt_X">Web Developer</h5>
						<span>SYNERGY WEB DESIGNERS</span><br>
						
						<ul class="d-flex m-0 ml-2 px-3">
							<li><small> 2 to 5 Yrs</small></li>
							<li class="ml-5"><small>Delhi</small></li>
						</ul>
					</div>
					<div class="col-md-4 text-right">
						<small>date</small>
					</div>
				</div>
				<div class="px-3"><small>Required Web Developer Key Skills required - Excellent Knowledge of PHP , Ajax , MySQL , MySQLI , Jquery , XML , HTML5 , CSS3</small>
				</div>
				<hr>
				<div class="row m-0">
					<div class="col-md-8">
						<small><strong>Skills : </strong>web designing, css, html, javascript, jquery</small>
					</div>
					<div class="col-md-4 text-right">
						<div class="btn btn-default border">Apply</div>
					</div>
				</div>
			</a>
		</div>

	</div> -->
		</div>
	</div>
</div>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#applyNow').click(function(){
		      var job_id=$(this).attr('job_id');
		      $.ajax({
		        url:"<?=base_url('Web/applyForJob')?>",
		        type:"post",
		     
		        data:{job_id:job_id},
		        success:function(response){
		          // console.log(response);
		          response=JSON.parse(response);
		          if(response.code==1){
		            swal("Great..","Application Submitted Successfully .","success");
		          }else{
		            swal("Ooops..","Already Applied","warning");
		          }
		          setInterval(function(){
		            location.reload();
		          },2000)
		        }
		      });
		    });
		});
	</script>
	    