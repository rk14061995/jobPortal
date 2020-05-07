
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-body">
            <section class="textarea-select"> 
              <div class="row match-height">
                  <div class="col-lg-8 offset-md-2 col-md-12">
                      <div class="card">
                          <div class="card-header">
                              <h4 class="card-title">Add User Message</h4>
                          </div>

                          <div class="card-block">
                              <div class="card-body">
                                <form id="insert">
                                  <h5 class="mt-2">User By</h5>
                                  <fieldset class="form-group">
                                      <!-- <p class="text-muted">Textarea description text.</p> -->
                                      <select class="form-control" name="from_email_id">
                                        <option>Select Option</option>
                                        <?php
                                        foreach($getUserdetails as $Userdetails)
                                          {
                                            ?>
                                            <option value="<?=$Userdetails->user_id?>"><?=$Userdetails->email?></option>
                                        <?php
                                        }?>
                                      </select>
                                  </fieldset>
                                   <h5 class="mt-2">Company To</h5>
                                   <fieldset class="form-group">
                                      <!-- <p class="text-muted">Textarea description text.</p> -->
                                      <select class="form-control" name="to_email_id">
                                        <option>Select Option</option>
                                        <?php
                                        foreach($getCompanyDetails as $CompanyDetails)
                                          {
                                            ?>
                                            <option value="<?=$CompanyDetails->company_id?>"><?=$CompanyDetails->company_email?></option>
                                        <?php
                                        }?>
                                      </select>
                                  </fieldset>
                                 
                                   <h5 class="mt-2">Subject</h5>
                                    <fieldset class="form-group"> 
                                      <!-- <p class="text-muted">Textarea description text.</p>  -->
                                      <input type="text" class="form-control" name="subject" required>
                                       </fieldset>
                                  <h5 class="mt-2">Message</h5>
                                  <fieldset class="form-group">
                                      <!-- <p class="text-muted">Textarea description text.</p> -->
                                     <textarea class="form-control" name="editor1"></textarea>
                                      <script>
                                              CKEDITOR.replace( 'editor1' );
                                      </script>
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
            url:"<?=base_url('Admin_Company/AddUserMessage')?>",
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
                    swal("Message!", "Try Again", "error")
                 }
                 if(obj.status==1)
                 {
                  swal("Message!", "Send", "success")
                 }
                 if(obj.status==2)
                 {
                 swal("Message!", "Already Exist", "error")
                 }
                 // location.reload();
                // $("#insert").load(location.href + " #insert");
            }
        
             });    
    

    
});
</script>