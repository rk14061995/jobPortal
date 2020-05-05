<div class="app-content content" id="refresh">
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-body">
            <section class="textarea-select"> 
              <div class="row match-height">
                  <div class="col-lg-8 offset-md-2 col-md-12">
                      <div class="card">
                          <div class="card-header">
                              <h4 class="card-title">Upadate Company</h4>
                          </div>
                          <div class="card-block">
                              <div class="card-body">
                                <form id="insert" >
                                  <?php
                                    foreach($getCompanytdetails as $Companytdetails)
                                    {
                                      // print_r($Companytdetails);
                                       
                                    }
                                    ?>
                                    <h5 class="mt-2">Company Name</h5>
                                  <fieldset class="form-group">
                                      <!-- <p class="text-muted">Textarea description text.</p> -->
                                      <input type="text" value="<?=$Companytdetails->company_name?>" class="form-control" required  name="company">
                                       <input type="hidden" value="<?=$Companytdetails->company_id?>"   name="company_id">                         
                                  </fieldset>
                                    <h5 class="mt-2">Description</h5>
                                  <fieldset class="form-group">
                                      <!-- <p class="text-muted">Textarea description text.</p> -->
                                      <input type="text" value="<?=$Companytdetails->comp_desc?>"class="form-control" required  name="desc">                         
                                  </fieldset>
                                   <h5 class="mt-2">Address</h5>
                                  <fieldset class="form-group">
                                      <!-- <p class="text-muted">Textarea description text.</p> -->
                                      <input type="text" value="<?=$Companytdetails->comp_address?>"class="form-control" required  name="address">                         
                                  </fieldset>
                                   <h5 class="mt-2">Website Url</h5>
                                  <fieldset class="form-group">
                                      <!-- <p class="text-muted">Textarea description text.</p> -->
                                      <input type="text" value="<?=$Companytdetails->website_url?>"class="form-control" required  name="url">                         
                                  </fieldset>
                                  <h5 class="mt-2">Email</h5>
                                  <fieldset class="form-group">
                                      <!-- <p class="text-muted">Textarea description text.</p> -->
                                      <input type="email" value="<?=$Companytdetails->company_email?>"class="form-control" required  name="email">                         
                                  </fieldset>
                                   <h5 class="mt-2">Password</h5>
                                  <fieldset class="form-group">
                                      <!-- <p class="text-muted">Textarea description text.</p> -->
                                      <input type="text" value="<?=$Companytdetails->company_pwd?>"class="form-control" required  name="pass">                         
                                  </fieldset>
                                 
                                  <h5 class="mt-2">Registration No</h5>
                                  <fieldset class="form-group">
                                      <!-- <p class="text-muted">Textarea description text.</p> -->
                                      <input type="text" value="<?=$Companytdetails->company_reg_no?>"class="form-control" required  name="regist">                         
                                  </fieldset>
                                   <h5 class="mt-2">Previous Logo</h5>
                                  <fieldset class="form-group">
                                      <!-- <p class="text-muted">Textarea description text.</p> -->
                                     <input type="hidden" name="image_string" id="image_string" value="<?=$Companytdetails->company_logo?>" class="form-control">
                                    <ul>
                                    <?php
                                   
                                       $myImages=explode(',',$Companytdetails->company_logo);
                                      for($i=0; $i<count($myImages);$i++)
                                      {
                                        ?>
                                        <li style="  display:inline-block;">
                                          <img style="width:6em;height:6em;"src="<?php echo base_url().'assets/companyImages/logo/'.$myImages[$i]?>" class="img-reponsive thumbnail">
                                       
                                         <a href="javascript:void(0)" img_id="<?=$i?>"  img_String="<?=$Companytdetails->company_logo?>" class="btn-info deleteimage">Delete</a>
                                       </li>
                                        <?php
                                      
                                      }
                                    ?>
                                  </ul>                       
                                  </fieldset>
                                   <h5 class="mt-2">Logo</h5>
                                  <fieldset class="form-group">
                                      <!-- <p class="text-muted">Textarea description text.</p> -->
                                      <input type="file"    name="file">                         
                                  </fieldset>
                                  <fieldset class="form-group">
                                      <button type="submit" class="btn btn-info btn-min-width mr-1 mb-1">Update</button>
                                  </fieldset>
                              </div>
                               </form>
                          </div>
                       

                      </div>
                  </div>
                  
              </div>
              <!-- Textarea end -->
            </section>
        </div>
      </div>
    </div>
          <script type="text/javascript">
 $(document).ready(function(){
  $('.deleteimage').on('click',function(){
    var element=$(this);
     var deleteimage=$(this).attr('img_id');
     var imgString=$("#image_string").val();
     $.ajax({
      url:"<?=base_url('Admin_Company/deleteImageFromcompany')?>",
      type:"post",
      data:{imgIndex:deleteimage,imgString:imgString},

      success:function(response){
        // console.log(response)
        response=JSON.parse(response);
        if(response.code==1){
          element.parent().remove();
          $('#image_string').val(response.newString);
          // console.log("sdfsdf"+response.newString)
        }
      }
     })
  })
 })
</script>
   <script type="text/javascript"> 
$(document).on('submit','#insert',function(e){
     e.preventDefault();
         var formData= new FormData($(this)[0]);
         // alert('cas');
         $.ajax({
            url:"<?=base_url('Admin_Company/updateCompany')?>",
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
                  swal("Company!", "Update", "success")
                 }
                 if(obj.status==2)
                 {
                 swal("Company!", "Already Exist", "error")
                 }
                 window.location.href='<?=base_url("Admin_Dashboard/viewCompany")?>';
            }
        
             });      
});
</script>