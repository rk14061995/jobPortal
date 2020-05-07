<div class="app-content content" id="refresh">
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-body">
            <section class="textarea-select"> 
              <div class="row match-height">
                  <div class="col-lg-8 offset-md-2 col-md-12">
                      <div class="card">
                          <div class="card-header">
                              <h4 class="card-title">Add Job</h4>
                          </div>
                          <div class="card-block">
                              <div class="card-body">
                                <form id="insert" >
                                     <?php
                                    foreach($getJobdetails as $Jobdetails)
                                    {
                                      // print_r($Seekerdetails);
                                    ?>
                                <h5 class="mt-2">Job Category</h5>
                                  <fieldset class="form-group">
                                      <!-- <p class="text-muted">Textarea description text.</p> -->
                                      <select class="form-control" name="job_category">
                                        <option>Select Option</option>
                                        <?php
                                        foreach($getCategory as $category)
                                          {
                                          if($Jobdetails->job_category==$category->category_id)
                                          {
                                          // print_r($od->owner_id);
                                          // print_r($owner->owner_id);
                                          echo '<option value="'.$category->category_id.'" selected>'.$category->category_name.'</option>';

                                          }
                                          else
                                          {
                                          echo '<option value="'.$category->category_id.'" >'.$category->category_name.'</option>';
                                          }
                                           
                                      
                                        }?>
                                      </select>
                                  </fieldset>
                                   <h5 class="mt-2">Job Type</h5>
                                  <fieldset class="form-group">
                                      <!-- <p class="text-muted">Textarea description text.</p> -->
                                      <select class="form-control" name="job_type">
                                        <option>Select Option</option>
                                        <?php
                                        foreach($getJobtype as $jobtype)
                                          {
                                            if($Jobdetails->job_type==$jobtype->type_id)
                                          {
                                          
                                          echo '<option value="'.$jobtype->type_id.'" selected>'.$jobtype->type_name.'</option>';

                                          }
                                          else
                                          {
                                          echo '<option value="'.$jobtype->type_id.'" >'.$jobtype->type_name.'</option>';
                                          }
                                            
                                       
                                        }?>
                                      </select>
                                  </fieldset>
                                  <h5 class="mt-2">Company</h5>
                                  <fieldset class="form-group">
                                     
                                      <select class="form-control" name="added_by_company_id" id="basicSelect">
                                        <option>Select Option</option>
                                        <?php
                                        foreach($getCompany as $company)
                                        { 
                                          if($Jobdetails->added_by_company_id==$company->company_id)
                                          {
                                          
                                          echo '<option value="'.$company->company_id.'" selected>'.$company->company_name.'</option>';

                                          }
                                          else
                                          {
                                         echo '<option value="'.$company->company_id.'" >'.$company->company_name.'</option>';
                                          }
                                            
                                       
                                         
                                       }?>
                                       </select>
                                  </fieldset>

                                    <h5 class="mt-2">Job Title</h5>
                                  <fieldset class="form-group">
                                      <!-- <p class="text-muted">Textarea description text.</p> -->
                                      <input type="text" value="<?=$Jobdetails->job_title?>"class="form-control" required  name="job_title">
                                       <input type="hidden" value="<?=$Jobdetails->job_id?>"class="form-control" required  name="job_id">                         
                                  </fieldset>
                                    <h5 class="mt-2">Job Description</h5>
                                  <fieldset class="form-group">
                                      <!-- <p class="text-muted">Textarea description text.</p> -->
                                      <input type="text" value="<?=$Jobdetails->job_desc?>"class="form-control" required  name="job_desc">                         
                                  </fieldset>
                                  <h5 class="mt-2">Skills</h5>
                                  <fieldset class="form-group ">
                                      <!-- <p class="text-muted">Textarea description text.</p> -->
                                  <?php
                                  // print_r($getJobdetails);
                                  $skillNeeded = explode(',',$getJobdetails[0]->skills);
                                  ?>
                                  <?php foreach($Skills as $skill): ?>
                                  <!-- <div class="col"> -->
                                  <?php
                                  if (in_array($skill->skill_id, $skillNeeded))
                                  {
                                  ?>
                                  <input type="checkbox" name="skills[]" checked class="" value="<?=$skill->skill_id?>"> <?=$skill->skill_name?>
                                  <?php
                                  }
                                  else
                                  {
                                  ?>
                                  <input type="checkbox" name="skills[]" class="" value="<?=$skill->skill_id?>"> <?=$skill->skill_name?>
                                  <?php
                                  }
                                  ?>

                                  <!-- </div> -->
                      
                                  <?php endforeach;?>                       
                                  </fieldset>
                                  <h5 class="mt-2">Work Experience</h5>
                                  <fieldset class="form-group">
                                      <div class="row">
                                      <div class="col-md-3">
                                      <select class="form-control"  required name="minimumwork">
                                        <option selected>Minimum</option>
                                        <?php for($min=0; $min<=30; $min++) :?>
                                          <?php if($getJobdetails[0]->min_work_exp==$min){?>
                                            <option  value="<?=$min?>" selected><?=$min?></option>
                                          <?php } else {?>
                                            <option  value="<?=$min?>" ><?=$min?></option>
                                          <?php }?>
                                        <?php  endfor;?>
                                        
                                       
                                      </select>
                                    </div>
                                       <h6 class="mt-2">to</h6>
                                        <div class="col-md-3">
                                        <select class="form-control" required name="maximumwork">                                                    
                                          <option selected>Maximum</option>
                                          <?php for($max=1; $max<=30; $max++) :?>
                                          <?php if($getJobdetails[0]->max_work_exp==$max){?>
                                          <option  value="<?=$max?>" selected><?=$max?></option>
                                          <?php } else {?>
                                          <option  value="<?=$max?>" ><?=$max?></option>
                                          <?php }?>
                                          <?php  endfor;?>
                                         </select>                            
                                      </div>
                                      </div>                   
                                  </fieldset>
                                  <h5 class="mt-2">Annual CTC</h5>
                                   <div class="row">
                                   <div class="col-md-2" >
                                      <fieldset class="form-group" id="currencyrefresh">
                                      
                                    <select class="form-control"   required name="currencytype">
                                     <option selected>Currency</option> 
                                      <?php
                                        foreach($currency as $currencytype)
                                        { 
                                           if($Jobdetails->currency_type==$currencytype->curr_id)
                                           {
                                            echo' <option selected value="'.$currencytype->curr_id.'">'.$currencytype->currency_name.'</option>';
                                           }
                                           else
                                           {
                                           echo' <option  value="'.$currencytype->curr_id.'">'.$currencytype->currency_name.'</option>';
                                           }
                                       
                                       }
                                       ?>
                                       </select>
                                    <!-- <button type="button"  data-toggle="modal" data-target="#modalPush" id="acount" class=" btn-light " title="New Accounts"><i class="fa fa-plus"></i></button> -->
                                                  
                                  </fieldset>
                               </div>
                               <div class="col-md-3" >
                                  <fieldset class="form-group" id="minsalaryrefresh">
                                      
                                    <select class="form-control"   required name="minisalary">
                                     <option selected>Min Annual Salary</option> 
                                      <?php
                                        foreach($min_salary as $min_sal)
                                        { 
                                          if($Jobdetails->min_annual_sal==$min_sal->min_sal_id)
                                          {
                                            echo' <option selected value="'.$min_sal->min_sal_id.'">'.$min_sal->min_salary.'</option>';
                                          }
                                          else
                                          {
                                             echo' <option  value="'.$min_sal->min_sal_id.'">'.$min_sal->min_salary.'</option>';
                                          }
                                       }?>
                                       </select>
                                   <!--  <button type="button"  data-toggle="modal" data-target="#min_salary_modal" id="acount" class=" btn-light " title="New Min Salary"><i class="fa fa-plus"></i></button> -->
                                                 
                                  </fieldset>
                                </div>
                                    <div class="col-md-3 ">
                                   <fieldset class="form-group"  id="maxsalaryrefresh"> 
                                    <select class="form-control"   required name="maxxsalary">
                                     <option selected>Max Annual Salary</option> 
                                      <?php
                                        foreach($max_salary as $max_sal)
                                        { 
                                          if($Jobdetails->max_annaul_sal== $max_sal->max_sal_id)
                                          {
                                            echo' <option selected value="'.$max_sal->max_sal_id.'">'.$max_sal->max_sal.'</option>';
                                          }
                                          else
                                          {
                                             echo' <option  value="'.$max_sal->max_sal_id.'">'.$max_sal->max_sal.'</option>';
                                          }
                                       
                                       }?>
                                       </select>
                                   <!--  <button type="button" data-toggle="modal" data-target="#max_salary_modal" id="acount" class=" btn-light " title="New Accounts"><i class="fa fa-plus"></i></button> -->           
                                  </fieldset>
                                </div>
                             
                                   </div>
                                   <h5 class="mt-2">Job Location</h5>
                                  <fieldset class="form-group">
                                      <!-- <p class="text-muted">Textarea description text.</p> -->
                                      <input type="text" value="<?=$Jobdetails->job_location_?>"class="form-control" required  name="joblocation">                         
                                  </fieldset>
                                   <h5 class="mt-2">Specify UG Qualifications</h5>
                                  <fieldset class="form-group">
                                       <p class="text-danger">(Mandatory)**</p> 
                                      <input type="text" class="form-control" required value="<?=$Jobdetails->ug_qualification?>" name="ugqualification">                         
                                  </fieldset>
                                   <h5 class="mt-2"> Specify PG Qualifications</h5>
                                  <fieldset class="form-group">
                                       <p class="text-danger">(If Not Type None)**</p> 
                                      <input type="text" class="form-control" value="<?=$Jobdetails->pg_qualification?>"required  name="pgqualification">                         
                                  </fieldset>
                                   <h5 class="mt-2">Specify Doctorate/Ph.D</h5>
                                  <fieldset class="form-group">
                                       <p class="text-danger">(If Not Type None)**</p> 
                                      <input type="text" class="form-control" value="<?=$Jobdetails->phd_qualification?>"required  name="doctorate_phd">                         
                                  </fieldset>
                                   <h5 class="mt-2">Vacancies</h5>
                                  <fieldset class="form-group">
                                      <!-- <p class="text-muted">Textarea description text.</p> -->
                                      <input type="number" value="<?=$Jobdetails->vacancies_?>"class="form-control" required  name="vacancies_">                         
                                  </fieldset>

                                   <h5 class="mt-2">Job Status</h5>
                                  <fieldset class="form-group">
                                      <!-- <p class="text-muted">Textarea description text.</p> -->
                                     <?php
                                    if($Jobdetails->job_status=="Vacant")
                                      {?>
                                        <label >Vacant</label>
                                          <input type="radio" checked value="2" required  name="job_status">
                                         <label >Filled</label>
                                          <input type="radio"  value="1" required  name="job_status">
                                      <?php
                                    }
                                    else
                                    {?>
                                      <label >Filled</label>
                                          <input type="radio"  value="1" required  name="job_status">
                                          <label >Vacant</label>
                                      <input type="radio" checked value="2" required  name="job_status">
                                      <?php 
                                    }?>                         
                                  </fieldset>
                                   <h5 class="mt-2">Last Date</h5>
                                  <fieldset class="form-group">
                                      <!-- <p class="text-muted">Textarea description text.</p> -->
                                      <input type="text" value="<?=$Jobdetails->last_date?>"class="form-control" required  name="last_date">                         
                                  </fieldset>
                                  <?php
                                }
                                  ?>
                                  <fieldset class="form-group">
                                      <button type="submit" class="btn btn-info btn-min-width mr-1 mb-1">update</button>
                                  </fieldset>
                              </div>
                               </form>
                          </div>
                       

                          <!-- <div class="card-block">
                              <div class="card-body">
                                  <h5 class="mt-2">Basic Select</h5>
                                  <fieldset class="form-group">
                                      <select class="form-control" id="basicSelect">
                                        <option>Select Option</option>
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                        <option>Option 4</option>
                                        <option>Option 5</option>
                                      </select>
                                  </fieldset>
                                  <h5 class="mt-2">Custom select</h5>
                                  <p>To use custom select add class<code>.custom-select</code> to select.</p>
                                  <fieldset class="form-group">
                                      <select class="custom-select" id="customSelect">
                                          <option selected>Open this select menu</option>
                                          <option value="1">One</option>
                                          <option value="2">Two</option>
                                          <option value="3">Three</option>
                                      </select>
                                  </fieldset>
                                  <h5 class="mt-2">Multiple select</h5>
                                  <p>To use multiple select add an attribute<code> multiple="multiple"</code>.</p>
                                  <fieldset class="form-group">
                                      <select class="form-control" id="countrySelect" multiple="multiple">
                                          <option selected="selected">United States</option>
                                          <option>Canada</option>
                                          <option selected="selected">United Kingdom</option>
                                          <option>Japan</option>
                                          <option>Australia</option>
                                          <option>Germany</option>
                                          <option selected="selected">India</option>
                                          
                                      </select>
                                  </fieldset>
                              </div>
                          </div> -->
                      </div>
                  </div>
                  
              </div>
              <!-- Textarea end -->
            </section>
        </div>
      </div>
    </div>

  <script type="text/javascript"> 
$(document).on('submit','#insert',function(e){
     e.preventDefault();
         var formData= new FormData($(this)[0]);
         // alert('cas');
         $.ajax({
            url:"<?=base_url('Admin_Job/updateJobs')?>",
             type:"post",
             catche:false,
             contentType:false,
             processData:false,
             data:formData,
             success:function(response)
            {
                 var obj=JSON.parse(response);
                  console.log(obj.status);
                 if(obj.status==0)
                 {
                    swal("Job!", "Try Again", "error")
                 }
                 if(obj.status==1)
                 {
                  swal("Job!", "Update", "success")
                 }
                 if(obj.status==2)
                 {
                 swal("Job!", "Already Exist", "error")
                 }
                 window.location.href='<?=base_url("Admin_Dashboard/view_Job")?>';
            }
        
             });      
});
</script>