<div class="app-content content" id="refresh">
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-body">
            <section class="textarea-select"> 
              <div class="row match-height">
                  <div class="col-md-12">
                      <div class="card">
                          <div class="card-header">
                              <h4 class="card-title">Add Job</h4>
                          </div>
                          <div class="card-block">
                              <div class="card-body">
                                <form id="insert" >
                                  <div class="row">
                                    <div class="col-md-4">
                                      <label>Category</label>
                                      <select class="form-control" name="jcat">
                                        <option>Select Option</option>
                                        <?php
                                        foreach($getCategory as $category)
                                          {
                                            ?>
                                            <option value="<?=$category->category_id?>"><?=$category->category_name?></option>
                                        <?php
                                        }?>
                                      </select>
                                    </div>
                                    <div class="col-md-4">
                                      <label>Type</label>
                                      <select class="form-control" name="jtype">
                                        <option>Select Option</option>
                                        <?php
                                        foreach($getJobtype as $jobtype)
                                          {
                                            ?>
                                            <option value="<?=$jobtype->type_id?>"><?=$jobtype->type_name ?></option>
                                        <?php
                                        }?>
                                      </select>
                                    </div>
                                    <div class="col-md-4">
                                      <label>Company</label>
                                      <select class="form-control" name="jcompany" id="basicSelect">
                                        <option>Select Option</option>
                                        <?php
                                        foreach($getCompany as $company)
                                        { 
                                          // print_r($company);?>  
                                        <option value="<?=$company->company_id?>"><?=$company->company_name?></option>
                                         <?php
                                       }?>
                                       </select>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4">
                                      <label>Job Title</label>
                                      <input type="text" class="form-control" required  name="jtitle"> 
                                    </div>
                                    <div class="col-md-4">
                                      <label>Vacancy</label>
                                      <input type="number" class="form-control" required  name="jvacancies"> 
                                    </div>
                                    <div class="col-md-4">
                                      <label>Last Date</label>
                                      <input type="date" id="field" min="" class="form-control" required  name="jlastdate">
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-12">
                                      <label>Description</label>
                                      <textarea class="form-control" required  name="jdesc">
                                        
                                      </textarea>
                                      
                                    </div>
                                    
                                  </div>
                                  <div class="row">
                                    <div class="col-md-12">
                                      <label>Skill Needed</label>
                                      <select class="form-control">
                                        
                                      </select>
                                    </div>
                                    
                                  </div>
                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="row">
                                        <div class="col-md-12">
                                          <label>Work Experience</label>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4"></div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4"></div>
                                  </div>
                                
                                   <h5 class="mt-2">Keywords</h5>
                                  <fieldset class="form-group">
                                      <!-- <p class="text-muted">Textarea description text.</p> -->
                                         <?php foreach($Skills as $skill): ?>
                                          <input type="checkbox" name="skills[]" value="<?=$skill->skill_id?>"> <?=$skill->skill_name?>
                                           <?php endforeach;?>                          
                                  </fieldset>
                                   <h5 class="mt-2">Work Experience</h5>
                                  <fieldset class="form-group">
                                      <div class="row">
                                        <div class="col-md-3">
                                          <select class="form-control"  required name="minimumwork">
                                            <option selected>Minimum</option>
                                            <option  value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                             <option value="29">29</option>
                                              <option value="30">30</option>
                                          </select>
                                        </div>
                                       <h6 class="mt-2">to</h6>
                                        <div class="col-md-3">
                                          <select class="form-control" required name="maximumwork">
                                        <option selected>Maximum</option>                             
                                        <option  value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                         <option value="29">29</option>
                                          <option value="30">30</option>
                                      </select>  
                                      </div>
                                      </div>                   
                                  </fieldset>
                                   <h5 class="mt-2">Annual CTC</h5>
                                   <div class="row">
                                   <div class="col-md-4" >
                                      <fieldset class="form-group" id="currencyrefresh">
                                      
                                    <select class="form-control"   required name="currencytype">
                                     <option selected>Currency</option> 
                                      <?php
                                        foreach($currency as $currencytype)
                                        { 
                                          // print_r($company);?>  
                                        <option value="<?=$currencytype->curr_id?>"><?=$currencytype->currency_name?></option>
                                         <?php
                                       }?>
                                       </select>
                                    <button type="button"  data-toggle="modal" data-target="#modalPush" id="acount" class=" btn-light " title="New Accounts"><i class="fa fa-plus"></i></button>
                                                  
                                  </fieldset>
                               </div>
                               <div class="col-md-4" >
                                  <fieldset class="form-group" id="minsalaryrefresh">
                                      
                                    <select class="form-control"   required name="minisalary">
                                     <option selected>Min Annual Salary</option> 
                                      <?php
                                        foreach($min_salary as $min_sal)
                                        { 
                                          // print_r($company);?>  
                                        <option value="<?=$min_sal->min_sal_id?>"><?=$min_sal->min_salary?></option>
                                         <?php
                                       }?>
                                       </select>
                                    <button type="button"  data-toggle="modal" data-target="#min_salary_modal" id="acount" class=" btn-light " title="New Min Salary"><i class="fa fa-plus"></i></button>
                                                 
                                  </fieldset>
                                </div>
                                    <div class="col-md-4 ">
                                   <fieldset class="form-group"  id="maxsalaryrefresh"> 
                                    <select class="form-control"   required name="maxxsalary">
                                     <option selected>Max Annual Salary</option> 
                                      <?php
                                        foreach($max_salary as $max_sal)
                                        { 
                                          // print_r($company);?>  
                                        <option value="<?=$max_sal->max_sal_id?>"><?=$max_sal->max_sal?></option>
                                         <?php
                                       }?>
                                       </select>
                                    <button type="button" data-toggle="modal" data-target="#max_salary_modal" id="acount" class=" btn-light " title="New Accounts"><i class="fa fa-plus"></i></button>
                                                 
                                  </fieldset>
                                </div>
                             
                                   </div>
                                 
                                   <h5 class="mt-2">Job Location</h5>
                                  <fieldset class="form-group">
                                     
                                      <input type="text" class="form-control" required  name="joblocation">                         
                                  </fieldset>
                                   <h5 class="mt-2">Specify UG Qualifications</h5>
                                  <fieldset class="form-group">
                                       <p class="text-danger">(Mandatory)**</p> 
                                      <input type="text" class="form-control" required  name="ugqualification">                         
                                  </fieldset>
                                  <h5 class="mt-2"> Specify PG Qualifications</h5>
                                  <fieldset class="form-group">
                                       <p class="text-danger">(If Not Type None)**</p> 
                                      <input type="text" class="form-control" required  name="pgqualification">                         
                                  </fieldset>
                                   <h5 class="mt-2">Specify Doctorate/Ph.D</h5>
                                  <fieldset class="form-group">
                                       <p class="text-danger">(If Not Type None)**</p> 
                                      <input type="text" class="form-control" required  name="doctorate_phd">                         
                                  </fieldset>
                                   <h5 class="mt-2">Vacancies</h5>
                                  <fieldset class="form-group">
                                      
                                                              
                                  </fieldset>
                                   <h5 class="mt-2">Last Date</h5>
                                  <fieldset class="form-group">
                                      
                                                               
                                  </fieldset>
                                  <fieldset class="form-group">
                                      <button type="submit" class="btn btn-success btn-min-width mr-1 mb-1">Add</button>
                                  </fieldset>
                                </div>
                              </div>
                               </form>
                          </div>
                       

                      </div>
                  </div>
                  
              </div>
              <!-- Textarea end -->
            </section>
            <!-- Button trigger modal-->
<!--Modal: Currency modal-->
<div class="modal fade" id="modalPush" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-info" role="document">
    <!--Content-->
    <div class="modal-content text-center">
      <!--Header-->
      <div class="modal-header d-flex btn btn-info justify-content-center">
        <h3 class="heading text-white"><i>Add New Currency</i></h3>
      </div>

      <!--Body-->
      <div class="modal-body">

         <i class="fa fa-money fa-4x animated rotateIn mb-4"></i> 
       
         <form id="currency" >
        <h5 class="mt-2">New Currency</h5>
        <fieldset class="form-group">
            
            <input type="text" class="form-control" required  name="newcurrency">                         
        </fieldset>
        <div class="modal-footer flex-center">
           <button type="submit" class=" btn btn-success btn-min-width mr-1 mb-1">Add</button>
        <a type="button" class="btn btn-danger btn-min-width mr-1 mb-1 text-white" data-dismiss="modal">Cancel</a>
      </div>
    </div>
</form>
      </div>
  </div>
</div>
<!--Modal: currency modal-->

<!--Modal: Min Annual salary-->
<div class="modal fade" id="min_salary_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-info" role="document">
    <!--Content-->
    <div class="modal-content text-center">
      <!--Header-->
      <div class="modal-header btn btn-info d-flex justify-content-center">
        <h3 class="heading text-white"><i>Add Min Annual Salary</i></h3>
      </div>

      <!--Body-->
      <div class="modal-body">

         <i class="fa fa-money fa-4x animated rotateIn mb-4"></i> 
       
         <form id="minsalary" >
        <h5 class="mt-2 text-muted">Min Annual Salary</h5>
        <fieldset class="form-group">
            
            <input type="text" class="form-control" required  name="minannualsalary">                         
        </fieldset>
        <div class="modal-footer flex-center">
           <button type="submit" class="btn btn-success btn-min-width mr-1 mb-1">Add</button>
        <a type="button" class="btn btn-danger btn-min-width mr-1 mb-1 text-white" data-dismiss="modal">Cancel</a>
      </div>
    </div>
</form>
      </div>
  </div>
</div>
<!--Min Annual salary-->

<div class="modal fade" id="max_salary_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-info" role="document">
    <!--Content-->
    <div class="modal-content text-center">
      <!--Header-->
      <div class="modal-header btn btn-info d-flex justify-content-center">
        <h3 class="heading text-white"><i>Add Max Annual Salary</i></h3>
      </div>

      <!--Body-->
      <div class="modal-body">

         <i class="fa fa-money fa-4x animated rotateIn mb-4"></i> 
       
         <form id="maxsalary" >
        <h5 class="mt-2">Max Annual Salary</h5>
        <fieldset class="form-group">
            
            <input type="text"  class="form-control" required  name="maxannualsalary">                         
        </fieldset>
        <div class="modal-footer flex-center">
           <button type="submit" class="btn btn-success btn-min-width mr-1 mb-1">Add</button>
        <a type="button" class="btn btn-danger btn-min-width mr-1 mb-1 text-white" data-dismiss="modal">Cancel</a>
      </div>
    </div>
</form>
      </div>
  </div>
</div>
<!--Min Annual salary-->
        </div>
      </div>
    </div>
    <script type="text/javascript"> 
$(document).on('submit','#maxsalary',function(e){
     e.preventDefault();
         var formData= new FormData($(this)[0]);
         // alert('cas');
         $.ajax({
            url:"<?=base_url('Admin_Job/addMaxSalalry')?>",
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
                    swal("Maximum Salary!", "Try Again", "error")
                 }
                 if(obj.status==1)
                 {
                  swal("Maximum Salary!", "Added", "success")
                 }
                 if(obj.status==2)
                 {
                 swal("Maximum Salary!", "Already Exist", "error")
                 }
                $("#maxsalaryrefresh").load(location.href + " #maxsalaryrefresh");
            }
        
             });    
       
});
</script>
     <script type="text/javascript"> 
$(document).on('submit','#minsalary',function(e){
     e.preventDefault();
         var formData= new FormData($(this)[0]);
         // alert('cas');
         $.ajax({
            url:"<?=base_url('Admin_Job/addMinSalary')?>",
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
                    swal("Minimun Salary!", "Try Again", "error")
                 }
                 if(obj.status==1)
                 {
                  swal("Minimun Salary!", "Added", "success")
                 }
                 if(obj.status==2)
                 {
                 swal("Minimun Salary!", "Already Exist", "error")
                 }
                $("#minsalaryrefresh").load(location.href + " #minsalaryrefresh");
            }
        
             });    
       
});
</script>
    <script type="text/javascript"> 
$(document).on('submit','#currency',function(e){
     e.preventDefault();
         var formData= new FormData($(this)[0]);
         // alert('cas');
         $.ajax({
            url:"<?=base_url('Admin_Job/addNewCurrency')?>",
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
                    swal("Currency!", "Try Again", "error")
                 }
                 if(obj.status==1)
                 {
                  swal("Currency!", "Added", "success")
                 }
                 if(obj.status==2)
                 {
                 swal("Currency!", "Already Exist", "error")
                 }
                $("#currencyrefresh").load(location.href + " #currencyrefresh");
            }
        
             });    
    

    
});
</script>
   <script type="text/javascript"> 
$(document).on('submit','#insert',function(e){
     e.preventDefault();
         var formData= new FormData($(this)[0]);
         // alert('cas');
         $.ajax({
            url:"<?=base_url('Admin_Job/addJobpostedddd')?>",
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
                  swal("Job!", "Added", "success")
                 }
                 if(obj.status==2)
                 {
                 swal("JOb!", "Already Exist", "error")
                 }
                $("#refresh").load(location.href + " #refresh");
            }
        
             });    
    

    
});
</script>
<script>
              var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();
 if(dd<10){
        dd='0'+dd
    } 
    if(mm<10){
        mm='0'+mm
    } 

today = yyyy+'-'+mm+'-'+dd;
document.getElementById("field").setAttribute("min", today);


            </script>