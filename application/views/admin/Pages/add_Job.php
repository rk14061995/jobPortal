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
                                <h5 class="mt-2">Job Category</h5>
                                  <fieldset class="form-group">
                                      <!-- <p class="text-muted">Textarea description text.</p> -->
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
                                  </fieldset>
                                   <h5 class="mt-2">Job Type</h5>
                                  <fieldset class="form-group">
                                      <!-- <p class="text-muted">Textarea description text.</p> -->
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
                                  </fieldset>
                                  <h5 class="mt-2">Company</h5>
                                  <fieldset class="form-group">
                                     
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
                                  </fieldset>

                                    <h5 class="mt-2">Job Title</h5>
                                  <fieldset class="form-group">
                                      <!-- <p class="text-muted">Textarea description text.</p> -->
                                      <input type="text" class="form-control" required  name="jtitle">                         
                                  </fieldset>
                                    <h5 class="mt-2">Job Description</h5>
                                  <fieldset class="form-group">
                                      <!-- <p class="text-muted">Textarea description text.</p> -->
                                      <input type="text" class="form-control" required  name="jdesc">                         
                                  </fieldset>
                                   <h5 class="mt-2">Vacancies</h5>
                                  <fieldset class="form-group">
                                      <!-- <p class="text-muted">Textarea description text.</p> -->
                                      <input type="number" class="form-control" required  name="jvacancies">                         
                                  </fieldset>
                                   <h5 class="mt-2">Last Date</h5>
                                  <fieldset class="form-group">
                                      <!-- <p class="text-muted">Textarea description text.</p> -->
                                      <input type="date" class="form-control" required  name="jlastdate">                         
                                  </fieldset>
                                  <fieldset class="form-group">
                                      <button type="submit" class="btn btn-success btn-min-width mr-1 mb-1">Add</button>
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
            url:"<?=base_url('Admin_Job/addCategory')?>",
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