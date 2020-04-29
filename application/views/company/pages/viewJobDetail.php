
  <div class="container">
    <?php
      $compData=unserialize($this->session->userdata('logged_company'));
      // print_r($jobDetail);
    ?>
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Post New Job</h1>
                <hr>
              </div>
              <form class="user" id="postNewJob">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Job Title" name="job_title" value="<?=$jobDetail[0]->job_title?>">
                    <input type="hidden" name="job_id" value="<?=$jobDetail[0]->job_id?>">
                  </div>
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <select class="form-control " name="exp">
                      <option>Experience</option>
                      <?php for($i=1; $i<=20;$i++): ?>
                        <option value="<?=$i?>"><?=$i?></option>
                        <?php
                          if($i==$jobDetail[0]->exp){
                            echo '<option value="'.$i.'" selected>'.$i.'</option>';
                          }else{
                            echo '<option value="'.$i.'" >'.$i.'</option>';
                          }

                        ?>
                      <?php endfor;?>
                    </select>
                  </div>
                  
                </div>
                <div class="form-group row">
                  <label>Job Description</label>
                  <div class="col-sm-12 mb-3 mb-sm-0">
                    <textarea class="form-control form-control-user" rows="5"placeholder="Job Description" name="job_desc" >
                      <?=$jobDetail[0]->job_desc?>
                    </textarea>
                   
                  </div>
                  
                  
                </div>
                
                <div class="form-group row">
                  <div class="col-md-3">
                    <label>Vaccancies</label>
                    <select class="form-control " name="vacancy">
                      <!-- <option>Vacancy</option> -->
                      <?php for($i=1; $i<=20;$i++): ?>
                        <?php
                          if($i==$jobDetail[0]->vacancies_){
                            echo '<option value="'.$i.'" selected>'.$i.'</option>';
                          }else{
                            echo '<option value="'.$i.'" >'.$i.'</option>';
                          }

                        ?>
                        
                      <?php endfor;?>
                    </select>
                  </div>
                  <div class="col-md-3">
                    <label>Job Category</label>
                    <select class="form-control " name="job_cat">
                      <!-- <option>Category</option> -->
                       <?php foreach($Categories as $cat): ?>
                        
                        <?php
                          if($cat->category_id==$jobDetail[0]->category_id){
                            echo '<option value="'.$cat->category_id.'" selected>'.$cat->category_name.'</option>';
                          }else{
                            echo '<option value="'.$cat->category_id.'" >'.$cat->category_name.'</option>';
                          }

                        ?>
                      <?php endforeach;?>
                    </select>
                  </div>
                  <div class="col-md-3">
                    <label>Job Type</label>
                    <select class="form-control " name="job_type">
                      <!-- <option>Job Type</option> -->
                      <?php foreach($Type as $ty): ?>
                        <!-- <option value="<?=$ty->type_id?>"><?=$ty->type_name?></option> -->
                        <?php
                          if($ty->type_id==$jobDetail[0]->job_type){
                            echo '<option value="'.$ty->type_id.'" selected>'.$ty->type_name.'</option>';
                          }else{
                            echo '<option value="'.$ty->type_id.'" >'.$ty->type_name.'</option>';
                          }

                        ?>
                      <?php endforeach;?>
                    </select>
                  </div>
                  <div class="col-md-3">
                    <label>Last Date</label>
                    <input type="date" name="last_Date" class="form-control " value="<?=date('d-m-Y',strtotime($jobDetail[0]->last_date))?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label>Skills Need</label>
                </div>
                <div class="form-group row">
                  <?php
                    $skillNeeded = explode(',',$jobDetail[0]->skill_ids);
                  ?>
                  <?php foreach($Skills as $skill): ?>
                    <div class="col">
                      <?php
                        if (in_array($skill->skill_id, $skillNeeded))
                        {
                          ?>
                            <input type="checkbox" name="skills[]" checked value="<?=$skill->skill_id?>"> <?=$skill->skill_name?>
                          <?php
                        }
                        else
                        {
                          ?>
                            <input type="checkbox" name="skills[]" value="<?=$skill->skill_id?>"> <?=$skill->skill_name?>
                          <?php
                        }
                      ?>
                      
                    </div>
                      
                  <?php endforeach;?>
                  
                </div>
                <input type="submit" name="" value="Update Job" class="btn btn-primary btn-user btn-block">
       
              
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
  