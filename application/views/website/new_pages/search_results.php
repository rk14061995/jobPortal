
<section class="container my-5 p-5">
	<div class="row">
		<div class="col-md-12">
			<?php foreach($JobsList as $job): ?> 
				<?php $skills=implode(',', $job['skills']);?>
				<a href="<?=base_url('Web/viewJobDetail/').$job['job_detail']->job_id?>" class="border p-3 JJH_j">
					<div class="card">
						<div class="card-body">
							<div class="m-0 row">
								<div class="col-md-8">
									<h5 class="m-0 txt_X"><?=$job['job_detail']->job_title?></h5>
									<span><?=$job['job_detail']->company_name?></span><br>
									
									<ul class="d-flex m-0 ml-2 px-3">
										<li><small> Min. <?=$job['job_detail']->exp?> Yrs</small></li>
										<li class="ml-5"><small><?=ucwords($job['job_detail']->job_location_)?></small></li>
									</ul>
								</div>
								<div class="col-md-4 text-right">
									<small>Posted on: <?=date('d-m-Y',strtotime($job['job_detail']->adde_on))?></small>
								</div>
							</div>
							<div class="px-3"><small>Required <?=$job['job_detail']->job_title?> Key Skills required - Excellent Knowledge of <?=$skills?></small>
							</div>
							<hr>
							<div class="row m-0">
								<div class="col-md-8">
									<small><strong>Skills : </strong><?=$skills?></small>
								</div>
								<div class="col-md-4 text-right">
									
									<div class="btn btn-default border">View</div>
									
								</div>
							</div>
						</div>
					</div>
					
				</a>
			<?php endforeach;?>
		</div>
	</div>


    <!-- <div class="p-1"> 
		<ul class="list-unstyled d-flex job_hd mb-2" >
			<li><a href="">Jobs</a><span> / </span></li>
			<li><a href="">Job Search </a><span> / </span></li>
			<li><a href="">Jobs in Noida</a><span> / </span></li>
			<li>We found <span class="txt_X"><?=count($JobsList)?></span> Jobs as per your search</li>
		</ul>
	</div>
	<div class="border p-3">
		<h4 class="mb-3">We found <span class="txt_X"><?=count($JobsList)?></span> Jobs as per your search </h4>
		<hr>
		
		<?php foreach($JobsList as $job): ?> 
			<?php $skills=implode(',', $job['skills']);?>
			<a href="<?=base_url('Web/viewJobDetail/').$job['job_detail']->job_id?>" class="border p-3 JJH_j">
				<div class="m-0 row">
					<div class="col-md-8">
						<h5 class="m-0 txt_X"><?=$job['job_detail']->job_title?></h5>
						<span><?=$job['job_detail']->company_name?></span><br>
						
						<ul class="d-flex m-0 ml-2 px-3">
							<li><small> Min. <?=$job['job_detail']->exp?> Yrs</small></li>
							<li class="ml-5"><small><?=ucwords($job['job_detail']->job_location_)?></small></li>
						</ul>
					</div>
					<div class="col-md-4 text-right">
						<small>Posted on: <?=date('d-m-Y',strtotime($job['job_detail']->adde_on))?></small>
					</div>
				</div>
				<div class="px-3"><small>Required <?=$job['job_detail']->job_title?> Key Skills required - Excellent Knowledge of <?=$skills?></small>
				</div>
				<hr>
				<div class="row m-0">
					<div class="col-md-8">
						<small><strong>Skills : </strong><?=$skills?></small>
					</div>
					<div class="col-md-4 text-right">
						
						<div class="btn btn-default border">View</div>
						
					</div>
				</div>
			</a>
		<?php endforeach;?>
		
	</div> -->
  </section>

