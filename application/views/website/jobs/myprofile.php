<?php
include"header.php";
?>

<section class="container" style="margin-top: 130px">
	<div class="row p-3 border ">
		<div class="col-md-2">
			<img src="" class="img-fluid">
		</div>
		<div class="col-md-8">
			<h4>Name</h4>
			<small>Basic Introduction</small><br>
			<small>email</small><br>
			<small>Phone Number</small>
		</div>
	</div>

	<div class="row  p-3 border mt-3">
		<div class="col-md-6">
			<h4>Resume</h4>
			<a href="" download>Uploaded Resume</a>
		</div>
		<div class="col-md-6 text-right">
			<label for="resume" class="btn btn-default border px-3">Upload Resume</label>
			<input type="file" name="resume" id="resume" class="d-none">
		</div>
	</div>

	<div class="p-3 border mt-3 mx-n3">
		<div class="row p-0 mx-0">
				<div class="col-md-6">
					<h4>Personal Details</h4>
				</div>
				<div class="col-md-6 text-right">
					<spann class="text-primary" id="infoSS"> <i class="fas fa-pencil-alt"></i></spann>
				</div>
		</div>
		<div class="shw_info w-100">
			<div class="row mx-0">
				<div class="col-md-3 onuNl">
					<strong>Name</strong><br>
					<strong>Email</strong><br>
					<strong>Mobile</strong><br>
					<strong>Date of Birth</strong><br>
					<strong>Location</strong><br>
					<strong>Gender</strong><br>
				</div>
				<div class="col-md-6">
					<span>Name</span><br>
					<span>email</span><br>
					<span>mobile</span><br>
					<span>date of birth</span><br>
					<span>location </span><br>
					<span>gender</span><br>
					
					
				</div>
			</div>
		</div>


		<div class="edit_info  w-100">
			<form class="">
				<div class="row mx-0 form-group">
					<div class="col-md-4">
						<label>Name<sub class="text-danger">*</sub></label>
					</div>
					<div class="col-md-6">
						<input type="text" class="form-control" name="" placeholder="Name">
					</div>
				</div>
				<div class="row mx-0 form-group ">
					<div class="col-md-4">
						<label>Email Id<sub class="text-danger">*</sub></label>
					</div>
					<div class="col-md-6">
						<input type="email" class="form-control" name="" placeholder="Email" required="">
					</div>
				</div>
				<div class="row mx-0 form-group ">
					<div class="col-md-4">
						<label>Phone Number<sub class="text-danger">*</sub></label>
					</div>
					<div class="col-md-6">
						<input type="tel" class="form-control" name="" placeholder="Phone" required="">
					</div>
				</div>
				<div class="row mx-0 form-group ">
					<div class="col-md-4">
						<label>Date of Birth<sub class="text-danger">*</sub></label>
					</div>
					<div class="col-md-6">
						<input type="date" class="form-control" name="" required="">
					</div>
				</div>
				<div class="row mx-0 form-group ">
					<div class="col-md-4">
						<label>Current Location<sub class="text-danger">*</sub></label>
					</div>
					<div class="col-md-6">
						<input type="text" class="form-control" name="" placeholder="" required="">
					</div>
				</div>
				<div class="row mx-0 form-group ">
					<div class="col-md-4">
						<label>Gender<sub class="text-danger">*</sub></label>
					</div>
					<div class="col-md-6">
						<select class="form-control" name="" required="">
							<option selected="" value="male">Male</option>
							<option selected="" value="male">Female</option>
						</select>
					</div>
				</div>
				<div class="text-center">
					<button class="btn btn-success">Save</button>
					<button class="btn btn-warning ml-3" id="cnclInfo">Cancel</button>
				</div>
			</form>
		</div>
	</div>
<script>
	$(document).on("click","#infoSS",function(){
		$(".edit_info").show();
		$(".shw_info").hide();
	})
	$(document).on("click","#cnclInfo",function(){
		$(".shw_info").show();
		$(".edit_info").hide();
	})
</script>
	<div class="p-3 border mt-3 mx-n3">
		<div class="row p-0 mx-0">
			<div class="col-md-6">
				<h4>Work Summary</h4>
			</div>
			<div class="col-md-6 text-right">
				<spann id="totlExpe" class="text-primary"><i class="fas fa-pencil-alt"></i></spann>
			</div>
		</div>

		<div class="work_sumry w-100">
			<div class="row mx-0">
				<div class="col-md-3 onuNl">
					<strong>Work Title</strong><br>
					<strong>Profile Summary</strong><br>
					<strong>Total Experience</strong><br>
			
				</div>
				<div class="col-md-6">
					<span>Title</span><br>
					<span>An enthusiastic and highly motivated professiona</span><br>
					<span>0 Months</span><br>
				</div>
			</div>
		</div>
		<div class="work_sumryEdit w-100 mt-2">
			<form class="">
				<div class="row mx-0 form-group ">
					<div class="col-md-4">
						<label>Work Title<sub class="text-danger">*</sub></label>
					</div>
					<div class="col-md-6">
						<input type="text" class="form-control" name="" placeholder="Name" required="">
					</div>
				</div>
				<div class="row mx-0 form-group ">
					<div class="col-md-4">
						<label>Profile Summary<sub class="text-danger">*</sub></label>
					</div>
					<div class="col-md-6">
						<textarea  class="form-control" name="" placeholder="" required=""></textarea>
					</div>
				</div>
				<div class="row mx-0 form-group ">
					<div class="col-md-4">
						<label>Total Experience<sub class="text-danger">*</sub></label>
					</div>
					<div class="col-md-3">
						<select class="form-control" name=""  required="">
							<option value="0" selected=""> 0 Yrs</option>
							<option value="1" selected=""> 1 Yrs</option>
							<option value="2" selected=""> 2 Yrs</option>
						</select>
					</div>
					<div class="col-md-3">
						<select class="form-control" name=""  required="">
							<option value="0" selected=""> 0 Month</option>
							<option value="1" selected=""> 1 Month</option>
							<option value="2" selected=""> 2 Month</option>
						</select>
					</div>
				</div>
				<div class="text-center mt-2">
					<button class="btn btn-success">Save</button>
					<button class="btn btn-warning ml-3" id="wrkCncl">Cancel</button>
				</div>
			</form>
		</div>
	</div>

<script>
	$(document).on("click","#totlExpe",function(){
		$(".work_sumryEdit").show();
		$(".work_sumry").hide();
	})
	$(document).on("click","#wrkCncl",function(){
		$(".work_sumry").show();
		$(".work_sumryEdit").hide();
	})
</script>


	<div class="p-3 border mt-3 mx-n3">
		<div class="row p-0 mx-0">
			<div class="col-md-6">
				<h4>Education</h4>
			</div>
			<div class="col-md-6 text-right">
				<span id="SjjEduca" class="text-primary"><i class="fas fa-pencil-alt"></i></spann>
			</div>
		</div>

		<div class="p-4">
			<div class="">
				<h6 class="mx-0">M.C.A</h6>
				<small>Computers</small><br>
				<small>Institute Name(Full Time) | passing year </small>
			</div>
		</div>
		<div class="w-100 mt-2 educaEdit" id="">
			<form >
				<div class="row mx-0 form-group ">
					<div class="col-md-4">
						<label>Education Specialization<sub class="text-danger">*</sub></label>
					</div>
					<div class="col-md-6">
						<select class="js-example-basic-single" name="state" class="form-control w-100" required="">
							<optgroup label="Alaskan/Hawaiian Time Zone">
							    <option value="AK" data-select2-id="60">Alaska</option>
							    <option value="HI">Hawaii</option>
							  </optgroup>
						</select>
					</div>
				</div>
				<div class="row mx-0 form-group ">
					<div class="col-md-4">
						<label>Institute Name<sub class="text-danger">*</sub></label>
					</div>
					<div class="col-md-6">
						<input type="text" name="" placeholder="Institute Name" class="form-control" required="">
					</div>
				</div>
				<div class="row mx-0 form-group ">
					<div class="col-md-4">
						<label>Course Type<sub class="text-danger">*</sub></label>
					</div>
					<div class="col-md-6">
						<div class="col-md-6">
							<select class="form-control" name="" required="">
								<option selected="" value="">Full Time</option>
								<option selected="" value="">Part Time</option>
								<option selected="" value="">Correspondence</option>
							</select>
						</div>
					</div>
				</div>
				<div class="row mx-0 form-group ">
					<div class="col-md-4">
						<label>Passing Year<sub class="text-danger">*</sub></label>
					</div>
					<div class="col-md-6">
						<div class="col-md-6">
							<select class="form-control" name="" required="">
								<option selected="" disabled="" value="">Year of Passing</option>
								<option selected="" value="">2015</option>
								<option selected="" value="">2014</option>
							</select>
						</div>
					</div>
				</div>
				<div class="text-center mt-2" >
					<button class="btn btn-success">Save</button>
					<button class="btn btn-warning ml-3" id="cnclEdu">Cancel</button>
				</div>
			</form>
		</div>
	</div>

	<script>
	$(document).on("click","#SjjEduca",function(){
		$(".educaEdit").show();
		
	})
	$(document).on("click","#cnclEdu",function(){
		
		$(".educaEdit").hide();
	})
</script>
	<div class="p-3 border mt-3 mx-n3">
		<div class="row p-0 mx-0">
			<div class="col-md-6">
				<h4>Skills</h4>
			</div>
			<div class="col-md-6 text-right">
				<spann class="text-primary">Add Skill</spann>
			</div>
		</div>

		<div class="w-100">
			<div class="row mx-0 border-bottom p-1">
				<div class="col-md-8">
					<span>Html (0 Yrs)</span>
				</div>
				<div class="col-md-4 text-right">
					<span><i class="fas fa-pencil-alt"></i></span>
					<span class="ml-3"><i class="fas fa-trash-alt"></i></span>
				</div>
			</div>
			<!-- <hr> -->
			<div class="row mx-0 border-bottom p-1">
				<div class="col-md-8">
					<span>Html (0 Yrs)</span>
				</div>
				<div class="col-md-4 text-right">
					<span id="eduASA"><i class="fas fa-pencil-alt"></i></span>
					<span class="ml-3"><i class="fas fa-trash-alt"></i></span>
				</div>
			</div>
		</div>
		<div class="mt-3 px-2 skilShw" id="skilShw">
			<form>
			<div class="row">
				<div class="col-md-4 text-center">
					<span>Skills<sub class="text-danger">*</sub></span>
				</div>
				<div class="col-md-4">
					<input type="text" class="form-control" name="" placeholder="Skill">
				</div>
				<div class="col-md-4">
					<select class="form-control" name="">
						<option selected="" disabled=""> Exp. Years</option>
						<option value="0" >0 Yrs</option>
						<option value="1" >1 Yrs</option>
					</select>
				</div>
			</div>
			<div class="text-center mt-2" >
					<button class="btn btn-success">Save</button>
					<button class="btn btn-warning ml-3" id="cnclskil">Cancel</button>
				</div>
		</form>
	</div>

</section>

	<script>
	$(document).on("click","#eduASA",function(){
		$(".skilShw").show();
		
	})
	$(document).on("click","#cnclskil",function(){
		
		$(".skilShw").hide();
	})
</script>
<script type="text/javascript">
	$(document).ready(function() {
	    $('.js-example-basic-single').select2();
	});
</script>
<?php
include"footer.php";
?>