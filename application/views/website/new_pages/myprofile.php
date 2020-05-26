
<?php 
	$userDetail=$this->session->userdata('logged_user_emp');
	$userDetail=unserialize($userDetail);
	// print_r($myResume);
	$resumePath=$myResume->resume_path;

?>
<section class="container" style="margin-top: 130px">
	<div class="row p-3 border ">
		<div class="col-md-2">
			<img src="<?=base_url('assets/UserImages/profile_picture/default.png')?>" class="img-fluid">
		</div>
		<div class="col-md-8">
			<h4><?=$userDetail[0]->fullname;?></h4>
			<hr>
			<small><?=$userDetail[0]->basic_introduction;?></small><br>
			<small><?=$userDetail[0]->email;?></small><br>
			<small><?=$userDetail[0]->phone_;?></small>
		</div>
	</div>

	<div class="row  p-3 border mt-3">
		<div class="col-md-6">
			<h4>Resume</h4>
			<a href="<?=base_url('assets/user_resume/').$resumePath?>" download>Uploaded Resume</a>
		</div>
		<div class="col-md-6 text-right">
			<label for="resume" class="btn btn-default border px-3 upR">Upload Resume</label>
			<input type="file" class="d-none file" name="file" id="file" >
		<!-- <input type="file" name="file" id="file">  -->
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
					<span><?=$userDetail[0]->fullname;?></span><br>
					<span><?=$userDetail[0]->email;?></span><br>
					<span><?=$userDetail[0]->phone_;?></span><br>
					<span><?=$userDetail[0]->dob_;?></span><br>
					<span><?=$userDetail[0]->address_;?></span><br>
					<span><?=$userDetail[0]->gender_;?></span><br>
					
					
				</div>
			</div>
		</div>


		<div class="edit_info  w-100">
			<form class="updateMyDetails">
				<div class="row mx-0 form-group">
					<div class="col-md-4">
						<label>Name<sub class="text-danger">*</sub></label>
					</div>
					<div class="col-md-6">
						<input type="text" class="form-control" name="full_name" value="<?=$userDetail[0]->fullname;?>" placeholder="Name" readonly>
					</div>
				</div>
				<div class="row mx-0 form-group ">
					<div class="col-md-4">
						<label>Email Id<sub class="text-danger">*</sub></label>
					</div>
					<div class="col-md-6">
						<input type="email" class="form-control" name="email" value="<?=$userDetail[0]->email;?>" placeholder="Email" readonly>
					</div>
				</div>
				<div class="row mx-0 form-group ">
					<div class="col-md-4">
						<label>Phone Number<sub class="text-danger">*</sub></label>
					</div>
					<div class="col-md-6">
						<input type="tel" class="form-control" name="phone" placeholder="Phone" value="<?=$userDetail[0]->phone_;?>">
					</div>
				</div>
				<div class="row mx-0 form-group ">
					<div class="col-md-4">
						<label>Date of Birth<sub class="text-danger">*</sub></label>
					</div>
					<div class="col-md-6">
						<input type="date" class="form-control" name="dob_" value="<?=$userDetail[0]->dob_;?>" >
					</div>
				</div>
				<div class="row mx-0 form-group ">
					<div class="col-md-4">
						<label>Current Location<sub class="text-danger">*</sub></label>
					</div>
					<div class="col-md-6">
						<input type="text" class="form-control" name="address" placeholder="" value="<?=$userDetail[0]->address_;?>">
					</div>
				</div>
				<div class="row mx-0 form-group ">
					<div class="col-md-4">
						<label>Gender<sub class="text-danger">*</sub></label>
					</div>
					<div class="col-md-6">
						<select class="form-control" name="gender_" required="">
							<option  value="1">Male</option>
							<option  value="2">Female</option>
							<option  value="3">Others</option>
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
				<hr>
			</div>
			<div class="col-md-6 text-right">
				<spann id="totlExpe" class="text-primary"><i class="fas fa-pencil-alt"></i></spann>
			</div>
		</div>
			
		<div class="work_sumry w-100">
			<?php foreach($workSummary as $summary):?>
				<div class="row mx-0">
					<div class="col-md-3 onuNl">
						<strong>Work Title</strong><br>
						<strong>Profile Summary</strong><br>
						<strong>Total Experience</strong><br>
				
					</div>
					<div class="col-md-6">
						<span><?=$summary->work_title?></span><br>
						<span><?=$summary->profile_summary?></span><br>
						<span><?=$summary->exp_year.' Years '.$summary->exp_month.' Months'?></span><br>
					</div>
				</div>
				<hr>
			<?php endforeach;?>
		</div>
		<div class="work_sumryEdit w-100 mt-2">
			<form class="addWorkSummary">
				<div class="row mx-0 form-group ">
					<div class="col-md-4">
						<label>Work Title<sub class="text-danger">*</sub></label>
					</div>
					<div class="col-md-6">
						<input type="text" class="form-control" name="work_title" placeholder="Name" required="">
					</div>
				</div>
				<div class="row mx-0 form-group ">
					<div class="col-md-4">
						<label>Profile Summary<sub class="text-danger">*</sub></label>
					</div>
					<div class="col-md-6">
						<textarea  class="form-control" name="profile_summary" placeholder="" required=""></textarea>
					</div>
				</div>
				<div class="row mx-0 form-group ">
					<div class="col-md-4">
						<label>Total Experience<sub class="text-danger">*</sub></label>
					</div>
					<div class="col-md-3">
						<select class="form-control" name="exp_year"  required="">
							<option value="0" selected=""> 0 Yrs</option>
							<?php for($i=1; $i<24;$i++):?>
								<option value="<?=$i?>" ><?=$i?> Yrs</option>
							<?php endfor;?>
						</select>
					</div>
					<div class="col-md-3">
						<select class="form-control" name="exp_month"  required="">
							<option value="0" selected=""> 0 Month</option>
							<?php for($i=1; $i<13;$i++):?>
								<option value="<?=$i?>" ><?=$i?> Month</option>
							<?php endfor;?>
						</select>
					</div>
				</div>
				<div class="text-center mt-2">
					<input type="submit" value="Save" class="btn btn-success">
					<!-- <button class="btn btn-success">Save</button> -->
					<a class="btn btn-warning ml-3" id="wrkCncl">Cancel</a>
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
				<hr>
			</div>
			<div class="col-md-6 text-right">
				<span id="SjjEduca" class="text-primary"><i class="fas fa-pencil-alt"></i></spann>
			</div>
		</div>
		<div class="p-4">
			<?php foreach($userEducation as $eduDetails):?>
				
				<div class="">
					<h6 class="mx-0"><?=$eduDetails->degree?></h6>
					<small><?=$eduDetails->course_?></small><br>
					<small><?=$eduDetails->institute_?> (<?=$eduDetails->course_type?>) | <?=$eduDetails->passing_year?> </small>
				</div>
				<hr>
			<?php endforeach;?>
		</div>
		<div class="w-100 mt-2 educaEdit" id="">
			<form id="addEducation" >
				
				<div class="row mx-0 form-group ">
					<div class="col-md-4">
						<label>Degree Name<sub class="text-danger">*</sub></label>
					</div>
					<div class="col-md-6">
						<input type="text" name="deg_name" placeholder="Degree Name" class="form-control" required="">
					</div>
				</div>
				<div class="row mx-0 form-group ">
					<div class="col-md-4">
						<label>Course Name<sub class="text-danger">*</sub></label>
					</div>
					<div class="col-md-6">
						<input type="text" name="course_name" placeholder="Course Name" class="form-control" required="">
					</div>
				</div>
				<div class="row mx-0 form-group ">
					<div class="col-md-4">
						<label>Institute Name<sub class="text-danger">*</sub></label>
					</div>
					<div class="col-md-6">
						<input type="text" name="inst_name" placeholder="Institute Name" class="form-control" required="">
					</div>
				</div>
				<div class="row mx-0 form-group ">
					<div class="col-md-4">
						<label>Course Type<sub class="text-danger">*</sub></label>
					</div>
					<div class="col-md-6">
						
						<select class="form-control" name="course_type" required="">
							<option  value="Regular">Regular</option>
							<option  value="Part Time">Part Time</option>
							<option  value="Correspondence">Correspondence</option>
						</select>
						
					</div>
				</div>
				<div class="row mx-0 form-group ">
					<div class="col-md-4">
						<label>Passing Year<sub class="text-danger">*</sub></label>
					</div>
					<div class="col-md-6">
						
						<select class="form-control" name="passing_year" required="">
							<option value="" selected>Year of Passing</option>
							<?php for($i=date('Y'); $i> 2000; $i--): ?>
								<option  value="<?=$i?>"><?=$i?></option>
							<?php endfor;?>
							<!-- <option value="203">2014</option> -->
						</select>
						
					</div>
				</div>
				<div class="text-center mt-2" >
					<input type="submit" class="btn btn-success" value="Save">
					<a class="btn btn-warning ml-3" id="cnclEdu">Cancel</a>
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
				<hr>
			</div>
			<div class="col-md-6 text-right">
				<span class="text-primary pointer" id="eduASA" >Add Skill</span>
			</div>
		</div>

		<div class="w-100">
			<?php
				// print_r($skills);
			?> 
			<?php if(count($skills[0])>0): ?>
				<?php foreach($skills as $sk): ?>
					<div class="row mx-0 border-bottom p-1">
						<div class="col-md-8">
							<span><?=$sk[0]->skill_name?></span>
						</div>
						<!-- <div class="col-md-4 text-right">
							<span><i class="fas fa-pencil-alt"></i></span>
							<span class="ml-3"><i class="fas fa-trash-alt"></i></span>
						</div> -->
					</div>
				<?php endforeach; ?>
			<?php endif;?>
			<!-- <hr> -->
			<!-- <div class="row mx-0 border-bottom p-1">
				<div class="col-md-8">
					<span>Html (0 Yrs)</span>
				</div>
				<div class="col-md-4 text-right">
					<span id="eduASA"><i class="fas fa-pencil-alt"></i></span>
					<span class="ml-3"><i class="fas fa-trash-alt"></i></span>
				</div>
			</div> -->
		</div>
		<div class="mt-3 px-2 skilShw" id="skilShw">
			<!-- <form> -->
			<div class="row">
				<div class="col-md-4 text-center">
					<span>Skills<sub class="text-danger">*</sub></span>
				</div>
				<!-- <?php print_r($allskills);?> -->
				<div class="col-md-8">
					<select class="js-example-basic form-control" name="states[]" id="add_skill"multiple="multiple">
						<?php foreach($allskills as $skill): ?>
							<option value="<?=$skill->skill_id?>"><?=$skill->skill_name?></option>
						<?php endforeach;?>
					  
					</select>
					<!-- <input type="text" class="form-control" name="" id="add_skill" placeholder="Skill"> -->
				</div>
				<!-- <div class="col-md-4">
					<select class="form-control" name="">
						<option selected="" disabled=""> Exp. Years</option>
						<option value="0" >0 Yrs</option>
						<?php for($i=1; $i<13;$i++):?>
							<option value="<?=$i?>" ><?=$i?> Yrs</option>
						<?php endfor;?>
					</select>
				</div> -->
			</div>
			<div class="text-center mt-2" >
					<button class="btn btn-success" id="addSkilles">Save</button>
					<button class="btn btn-warning ml-3" id="cnclskil">Cancel</button>
				</div>
		<!-- </form> -->
	</div>

</section>
<script>
	$(document).ready(function() {
	    $('.js-example-basic').select2();
	});
$(document).ready(function(){
	$('.upR').click(function() {
    $('#file').trigger('click');
    
});
$(document).on('click','#addSkilles',function(){
	var skill=$('#add_skill').val();
	console.log(skill);
	$.ajax({
		url:"<?=base_url('Web/updateUserSkill')?>",
		type:"post",
		data:{skill:skill},
		success:function(response){
			console.log(response);
			// console.log(data);
			var obj=JSON.parse(response);
	          // console.log(obj.status);           
			if (obj.status==1)
			{
				swal('Great!','Skill Added Successfully.','success');

				location.reload();

			}else{
				swal('Ooops..!',"Something Went Wrong.",'error');
			}
		}
	});
});
 $(document).on('change', '#file', function(){
  var name = document.getElementById("file").files[0].name;
  var form_data = new FormData();
  var ext = name.split('.').pop().toLowerCase();
  if(jQuery.inArray(ext, ['gif','png','jpg','jpeg','docx','pdf','doc']) == -1) 
  {
   swal("Resume","Invalid Image File","error");
  }
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("file").files[0]);
  var f = document.getElementById("file").files[0];
  var fsize = f.size||f.fileSize;
  if(fsize > 2000000)
  {
   swal("Resume"," File Size is very big","error");
  }
  else
  {
   form_data.append("file", document.getElementById('file').files[0]);
   $.ajax({
    url:"<?=base_url('Admin_Job/addResumeOnSelect')?>",
    method:"POST",
    data: form_data,
    contentType: false,
    cache: false,
    processData: false,
      
    success:function(data)
    {
    	console.log(data);
		var obj=JSON.parse(data);
          // console.log(obj.status);           
		if (obj.status==1)
		{
			swal('Resume!','Upload','success');

			location.reload();

		}else{
			swal('Ooops..!',obj.data,'error');
		}
    }
   });
  }
 });
});
</script>

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
<script type="text/javascript">
	$(document).ready(function(){
		$('.addWorkSummary').on('submit',function(e){
			e.preventDefault();
			var formData= new FormData($(this)[0]);
			$.ajax({
		        url:"<?=base_url('User/addWorkSummary')?>",
		        type:"post",
		        cache:false,
		        contentType:false,
		        processData:false,
		        data:formData,
		        success:function(response){
		          // console.log(response);
		          response=JSON.parse(response);
		          if(response.code==1){
		            swal("Great..","Work Summary Added Successfully.","success");
		          }else{
		            swal("Ooops..","Failed To Add","warning");
		          }
		          setInterval(function(){
		            location.reload();
		          },1000)
		        }
		      });
		});
		$('#addEducation').on('submit',function(e){
			e.preventDefault();
			var formData= new FormData($(this)[0]);
			$.ajax({
		        url:"<?=base_url('User/addEducation')?>",
		        type:"post",
		        cache:false,
		        contentType:false,
		        processData:false,
		        data:formData,
		        success:function(response){
		          // console.log(response);
		          response=JSON.parse(response);
		          if(response.code==1){
		            swal("Great..","Education Added Successfully.","success");
		          }else{
		            swal("Ooops..","Failed To Add","warning");
		          }
		          setInterval(function(){
		            location.reload();
		          },1000)
		        }
		      });
		});
		// $('#resume').on('change',function(){
		// 	// e.preventDefault();
		// 	var data=$(this).files[0];
		// 	// var formData= new FormData($(this)[0]);
		// 	$.ajax({
		//         url:"<?=base_url('User/uploadResume')?>",
		//         type:"post",
		//         cache:false,
		//         contentType:false,
		//         enctype:'multipart/form-data',
		//         processData:false,
		//         data:data,
		//         success:function(response){
		//           // console.log(response);
		//           response=JSON.parse(response);
		//           if(response.code==1){
		//             swal("Great..","Education Added Successfully.","success");
		//           }else{
		//             swal("Ooops..","Failed To Add","warning");
		//           }
		//           setInterval(function(){
		//             location.reload();
		//           },1000)
		//         }
		//       });
		// });
	});
	
	$(document).on('submit','.updateMyDetails',function(e){
		e.preventDefault();
			var formData= new FormData($(this)[0]);
		$.ajax({
		        url:"<?=base_url('User/updateMyDetails')?>",
		        type:"post",
		        cache:false,
		        contentType:false,
		        enctype:'multipart/form-data',
		        processData:false,
		        data:formData,
		        success:function(response){
		          // console.log(response);
		          response=JSON.parse(response);
		          if(response.status==1){
		            swal("Great..","Information Added Successfully.","success");
		          }else{
		            swal("Ooops..","Failed To Add","warning");
		          }
		          setInterval(function(){
		            location.reload();
		          },1000)
		        }
		      });
	});
</script>