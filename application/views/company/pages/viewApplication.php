
  <div class="container">
    <?php
      $compData=unserialize($this->session->userdata('logged_company'));
      // print_r($jobDetail);
      $educ=array();
      foreach ($jobDetail['educ'] as $edu) {
        $educ[]=$edu->degree.'|'.$edu->course_;
      }
      $educ=implode(', ',$educ);
      // print_r($jobDetail['skills']);
      $skills=implode(', ',$jobDetail['skills']);
    ?>
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Application Detail</h1>
                <hr>
              </div>
              <form class="user" id="postNewJob">
                <div class="form-group row">
                  <div class="col-md-3 text-left">
                    <p><strong>Applicant Name </strong> :</p>
                  </div>
                  <div class="col-md-9">
                    <p><?=$jobDetail['user']->fullname?></p>
                  </div>
                  
                </div>
                <div class="form-group row">
                  <div class="col-md-3 text-left">
                    <p><strong>Applicant Address </strong> :</p>
                  </div>
                  <div class="col-md-9">
                    <p><?=$jobDetail['user']->address_?></p>
                  </div>
                  
                </div>
                <div class="form-group row">
                  <div class="col-md-3 text-left">
                    <p><strong>Education Detail</strong> :</p>
                  </div>
                  <div class="col-md-9">
                    <p><?=$educ?></p>
                  </div>
                  
                </div>
                <div class="form-group row">
                  <div class="col-md-3 text-left">
                    <p><strong>Skills</strong> :</p>
                  </div>
                  <div class="col-md-9">
                    <p><?=$skills?></p>
                  </div>
                  
                </div>
                <div class="form-group row">
                  <div class="col-md-3 text-left">
                    <p><strong>Applied For</strong> :</p>
                  </div>
                  <div class="col-md-9">
                    <p><?=$jobDetail['data'][0]->job_title?></p>
                  </div>
                  
                </div>
                <div class="form-group row">
                  <div class="col-md-3 text-left">
                    <p><strong>Job Location</strong> :</p>
                  </div>
                  <div class="col-md-9">
                    <p><?=$jobDetail['data'][0]->job_location_?></p>
                  </div>
                  
                </div>
                
                
                <div class="form-group row">
              
                  <div class="col">
                    <a href="#" class="btn btn-primary btn-user btn-block text-white" >Send Message</a>
                  </div>
                  <div class="col">
                    <a href="#" class="btn btn-success btn-user btn-block text-white" >Schdule Interview</a>
                   
                  </div>
                  <!-- <div class="col">
                    <input type="submit" name="" value="Update Job" class="btn btn-primary btn-user btn-block">
                  </div> -->
                </div>
                
       
              
              </form>
              <hr>
              
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <script type="text/javascript">
  $(document).ready(function(){
    $('#postNewJob').on('submit',function(e){
      e.preventDefault();
      var formData=new FormData($(this)[0]);
      console.log("Working Fine");
      $.ajax({
        url:"<?=base_url('CompanyLogic/updateJobDetail')?>",
        type:"post",
        cache:false,
        contentType:false,
        processData:false,
        data:formData,
        success:function(response){
          // console.log(response);
          response=JSON.parse(response);
          if(response.code==1){
            swal("Great..","Updated Successfully.","success");
          }else{
            swal("Ooops..","Something went wrong","error");
          }
          location.reload();
        }
      });
    });
  });
</script>
  