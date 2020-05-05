<div class="app-content content" id="refresh">
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-body">
            <section class="textarea-select"> 
              <div class="row match-height">
                  <div class="col-lg-8 offset-md-2 col-md-12">
                      <div class="card">
                          <div class="card-header">
                              <h4 class="card-title">Add Company</h4>
                          </div>
                          <div class="card-block">
                              <div class="card-body">
                                <form id="insert" >
                                    <h5 class="mt-2">Company Name</h5>
                                  <fieldset class="form-group">
                                      <!-- <p class="text-muted">Textarea description text.</p> -->
                                      <input type="text" class="form-control" required  name="company">                         
                                  </fieldset>
                                    <h5 class="mt-2">Description</h5>
                                  <fieldset class="form-group">
                                      <!-- <p class="text-muted">Textarea description text.</p> -->
                                      <input type="text" class="form-control" required  name="desc">                         
                                  </fieldset>
                                   <h5 class="mt-2">Address</h5>
                                  <fieldset class="form-group">
                                      <!-- <p class="text-muted">Textarea description text.</p> -->
                                      <input type="text" class="form-control" required  name="address">                         
                                  </fieldset>
                                   <h5 class="mt-2">Website Url</h5>
                                  <fieldset class="form-group">
                                      <!-- <p class="text-muted">Textarea description text.</p> -->
                                      <input type="text" class="form-control" required  name="url">                         
                                  </fieldset>
                                  <h5 class="mt-2">Email</h5>
                                  <fieldset class="form-group">
                                      <!-- <p class="text-muted">Textarea description text.</p> -->
                                      <input type="email" class="form-control" required  name="email">                         
                                  </fieldset>
                                   <h5 class="mt-2">Password</h5>
                                  <fieldset class="form-group">
                                      <!-- <p class="text-muted">Textarea description text.</p> -->
                                      <input type="password" class="form-control" required  name="pass">                         
                                  </fieldset>
                                 
                                  <h5 class="mt-2">Registration No</h5>
                                  <fieldset class="form-group">
                                      <!-- <p class="text-muted">Textarea description text.</p> -->
                                      <input type="text" class="form-control" required  name="regist">                 
                                  </fieldset>
                                   <h5 class="mt-2">Certificate of Incorporation</h5>
                                  <fieldset class="form-group">
                                      <p class="text-danger">Certificate of Incorporation **</p> 
                                      <input type="file"  required  name="Incorpfile">
                                  </fieldset>
                                  <h5 class="mt-2">Articles of Association(AOA)</h5>
                                  <fieldset class="form-group">
                                      <p class="text-danger">(AOA)**</p> 
                                      <input type="file"  required  name="aoa">
                                  </fieldset>
                                   <h5 class="mt-2">Memorandum of Association(MOA)</h5>
                                  <fieldset class="form-group">
                                      <p class="text-danger">(MOA)**</p> 
                                      <input type="file"  required  name="moa">
                                  </fieldset>
                                  <h5 class="mt-2">Certificate of GST</h5>
                                  <fieldset class="form-group">
                                      <p class="text-danger">(Gst)</p> 
                                      <input type="file"    name="gst">
                                  </fieldset>
                                   <h5 class="mt-2">Plans</h5>
                                  <fieldset class="form-group">
                                      <!-- <p class="text-muted">Textarea description text.</p> -->
                                      <select class="form-control" name="Company_plans">
                                        <option>Select Option</option>
                                        <?php
                                        foreach($getCompanyType as $CompanyType)
                                          {
                                            ?>
                                            <option value="<?=$CompanyType->c_type_id?>"><?=$CompanyType->c_type_name?></option>
                                        <?php
                                        }?>
                                      </select>
                                  </fieldset>
                                   <h5 class="mt-2">Logo</h5>
                                  <fieldset class="form-group">
                                      <!-- <p class="text-muted">Textarea description text.</p> -->
                                      <input type="file"  required  name="file">                         
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
            url:"<?=base_url('Admin_Company/addCompany')?>",
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
                    swal("Company!", "Try Again", "error")
                 }
                 if(obj.status==1)
                 {
                  swal("Company!", "Added", "success")
                 }
                 if(obj.status==2)
                 {
                 swal("Company!", "Already Exist", "error")
                 }
                $("#refresh").load(location.href + " #refresh");
            }
        
             });    
    

    
});
</script>