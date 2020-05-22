
<!-- <section class="container-fluid banr_ol py-5">
	<div class="container pt-4">
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
</section>	 -->

<div class="container">
	<div class="p-1"> 
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
		
	</div>
</div>
