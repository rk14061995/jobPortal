 <div class="container-fluid">
 	<div class="card shadow mb-4">
	    <div class="card-body">
	      	<form class="">
		 		

		 		<div class="form-group">
		 			<label><strong>Basic Details</strong></label>
		 			<hr>
		 		</div>
		 		<div class="form-group row">
		 			<div class="col-md-2 offset-md-2">
		 				<label>Any of the keywords</label>	
		 			</div>
		 			<div class="col-md-4">
		 				<input type="text" class="form-control" name="">
		 			</div>
		 		</div>
		 		<hr>
		 		<div class="form-group row">
		 			<div class="col-md-3">
		 				 <strong>Search In:</strong>
		 			</div>
		 			<div class="col">
		 				<input type="radio" name="resumCre"> Resume Title
		 			</div>
		 			<div class="col">
		 				<input type="radio" name="resumCre"> Resume Skills
		 			</div>
		 			<div class="col">
		 				<input type="radio" name="resumCre"> Entire Resume
		 			</div>
		 		</div>
		 		<div class="form-group row">
		 			<div class="col-md-3">
		 				 <strong>Total Experience:</strong>
		 			</div>
		 			<div class="col">
		 				<input type="input" name="resumCre" class="form-control"> 
		 			</div>
		 			<div class="col-md-1">
		 				to
		 			</div>
		 			<div class="col">
		 				<input type="input" name="resumCre" class="form-control"> 
		 			</div>
		 			<div class="col">
		 				(in years)
		 			</div>
		 		</div>
		 		<div class="form-group row">
		 			<div class="col-md-3">
		 				 <strong>Annual Salary:</strong>
		 			</div>
		 			<div class="col">
		 				<select class="form-control">
		 					<option>- Lacs -</option>
		 				</select> 
		 			</div>
		 			<div class="col">
		 				<select class="form-control">
		 					<option>- Thousands -</option>
		 				</select> 
		 			</div>
		 			<div class="col-md-1">
		 				to
		 			</div>
		 			<div class="col">
		 				<select class="form-control">
		 					<option>- Lacs -</option>
		 				</select> 
		 			</div>
		 			<div class="col">
		 				<select class="form-control">
		 					<option>- Thousands -</option>
		 				</select> 
		 			</div>
		 		</div>
		 		<div class="form-group row">
		 			<div class="col-md-3">
		 				 <strong>Candidate's Current Location:</strong>
		 			</div>
		 			<div class="col">
		 				<select class="form-control">
		 					<option>- Select Locations -</option>
		 				</select> 
		 			</div>
		 			
		 		</div>
		 		<hr>
		 		<div class="form-group">
		 			<label><strong>Employment Details</strong></label>
		 			
		 		</div>
		 		<div class="form-group row">
		 			<div class="col-md-3">
		 				 <strong>Functional Area:</strong>
		 			</div>
		 			<div class="col-md-5">
		 				<select class="form-control">
		 					<option>- Select Locations -</option>
		 				</select> 
		 			</div>
		 		</div>
		 		<div class="form-group row">
		 			<div class="col-md-3">
		 				 <strong>Industry Type:</strong>
		 			</div>
		 			<div class="col-md-5">
		 				<select class="form-control">
		 					<option>- Select Industry -</option>
		 				</select> 
		 			</div>
		 		</div>
			</form>
	    </div>
	</div>
</div>



 <div class="container-fluid">
 	<div class="card shadow mb-4">
	    
	    <div class="card-body">
	      	<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-5 my-2 my-md-0 mw-100 navbar-search">
		 	
			    <div class="input-group">

			      <input type="text" name="key" id="key" class="form-control bg-default border-1 small" placeholder="Search for Resume" aria-label="Search" aria-describedby="basic-addon2">
			      <select class="form-control" name="skillName" id="skillName">
			      	<option value="0">Select</option>
			      	<option value="1">Gender</option>
			      	<option value="2">Nationality</option>
			      	<option value="3">Skill</option>
			      	<option value="4">Job Wise</option>
			      	<option value="5">Age Wise</option>
			      </select>
			      <div class="input-group-append">
			        <button class="btn btn-primary serResume" type="button">
			          <i class="fas fa-search fa-sm"></i>
			        </button>
			      </div>
			    </div>
			</form>
	    </div>
	</div>
 </div>

 

 <br>






        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Job Seekers</h1>
          <?php
            // print_r($jobSeekers);
          ?>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Job Seekers</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>S.No</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Contact No.</th>
                      <th>Resume</th>
                      
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>S.No</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Contact No.</th>
                      <th>Resume</th>
                    </tr>
                  </tfoot>
                  <tbody id="userData">
                    
                   
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

<script type="text/javascript">
	$(document).ready(function(){
		$('.serResume').click(function(){
			// console.log("Button Pressed");
			var key=$('#key').val();
			var skillname=$('#skillName').val();
			var formData={
							key:key,
							skillname:skillname
						};
			$.ajax({
		        url:"<?=base_url('Company/filterLogic')?>",
		        type:"post",
		        
		        data:formData,
		        success:function(response){
		          // console.log(response);
		          response=JSON.parse(response);
		          if(response.code==1){
		          	$('#userData').empty();
		          	for(let i=0; i<response.data.length; i++){
		          		var data_='';
		          		data_+='<tr>';
		          		data_+='<td>'+(i+1)+'</td>';
		          		data_+='<td>'+response.data[i].fullname+'</td>';
		          		data_+='<td>'+response.data[i].email+'</td>';
		          		data_+='<td>'+response.data[i].phone_+'</td>';
		          		data_+='<td><a href="javascript:void(0)">Download</a></td>';
		          		data_+='</tr>';
		          	}
		          }
		          $('#userData').append(data_);
		          // if(response.code==1){
		          //   swal("Great..","Education Added Successfully.","success");
		          // }else{
		          //   swal("Ooops..","Failed To Add","warning");
		          // }
		          // setInterval(function(){
		          //   location.reload();
		          // },1000)
		        }
		      });
		});
	});
</script>