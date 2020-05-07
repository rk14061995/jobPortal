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
                                       <h5 class="mt-2">Previous Certificate of Incorporation</h5>
                                  <fieldset class="form-group">
                                     <input type="hidden" name="incorporation_string" id="incorporation_" value="<?=$Companytdetails->comp_incorporation?>" class="form-control">
                                      <?php
                                   
                                       $myImages=explode(',',$Companytdetails->comp_incorporation);
                                      for($i=0; $i<count($myImages);$i++)
                                      {
                                        ?>

                                          <a href="<?php echo base_url().'assets/company_assets/company_Incorporation/'.$myImages[$i]?>"  style="margin-right:70px"class="btn-info ">View Previous</a> 
                                              <a href="javascript:void(0)" incorp_id="<?=$i?>"incorporation_String="<?=$Companytdetails->comp_incorporation?>" class="btn-danger deleteincorporation ">Remove</a>

                                        <!--  <embed type="application/pdf/msword" type="application/msword" src="<?php echo base_url().'assets/company_assets/company_AOA/'.$Companytdetails->comp_aoa?>" width="100%" height="100"  background-color="0xFF525659" top-toolbar-height="56" full-frame="" internalinstanceid="21" title="CHROME">  -->
                                         <?php
                                         }?>                   
                                  </fieldset>
                                   <h5 class="mt-2">Previous Articles of Association(AOA)</h5>
                                  <fieldset class="form-group">   
                                   <input type="hidden" name="aoa_string" id="aoa_" value="<?=$Companytdetails->comp_aoa?>" class="form-control"> 
                                    <?php
                                   
                                       $myImages=explode(',',$Companytdetails->comp_aoa);
                                      for($i=0; $i<count($myImages);$i++)
                                      {
                                       
                                        ?>   

                                         <a href="<?php echo base_url().'assets/company_assets/company_AOA/'.$myImages[$i]?>"  style="margin-right:70px" class="btn-info ">View Previous</a>
                                          <a href="javascript:void(0)" aoa_id="<?=$i?>"
                                            aoa_String="<?=$Companytdetails->comp_aoa?>" class="btn-danger deleteaoa">Remove</a>
                                            <?php
                                         }  
                                       ?>                                     
                                  </fieldset>
                                  <h5 class="mt-2">Memorandum of Association(MOA)</h5>
                                  <fieldset class="form-group">     
                                    <input type="hidden" name="moa_string" id="moa_" value="<?=$Companytdetails->comp_moa?>" class="form-control">
                                     <?php
                                   
                                       $myImages=explode(',',$Companytdetails->comp_moa);
                                      for($i=0; $i<count($myImages);$i++)
                                      {
                                        ?>                              
                                         <a href="<?php echo base_url().'assets/company_assets/company_MOA/'.$myImages[$i]?>"style="margin-right:70px" download  class="btn-info ">View Previous</a>
                                          <a href="javascript:void(0)" moa_id="<?=$i?>"  moa_String="<?=$Companytdetails->comp_moa?>" class="btn-danger deletemoa">Remove</a>
                                          <?php
                                        }?>                                     
                                  </fieldset>
                                  <h5 class="mt-2">Certificate of GST</h5>
                                  <fieldset class="form-group">  
                                  <input type="hidden" name="gst_string" id="gst_" value="<?=$Companytdetails->comp_gst?>" class="form-control">         <?php
                                   
                                       $myImages=explode(',',$Companytdetails->comp_gst);
                                      for($i=0; $i<count($myImages);$i++)
                                      {
                                        ?>                        
                                         <a href="<?php echo base_url().'assets/company_assets/company_GST/'.$myImages[$i]?>" style="margin-right:70px"download class="btn-info ">View Previous</a>
                                          <a href="javascript:void(0)" gst_id="<?=$i?>"  gst_String="<?=$Companytdetails->comp_gst?>" class="btn-danger deletegst">Remove</a>
                                          <?php
                                          }?>                                     
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
                                       
                                         <a href="javascript:void(0)" img_id="<?=$i?>"  img_String="<?=$Companytdetails->company_logo?>" class="btn-danger deleteimage">Delete</a>
                                       </li>
                                        <?php
                                      
                                      }
                                    ?>
                                  </ul>                       
                                  </fieldset>
                               <h5 class="mt-2">Certificate of Incorporation</h5>
                                  <fieldset class="form-group">
                                      <p class="text-danger">Certificate of Incorporation **</p> 
                                      <input type="file"    name="Incorpfile">
                                  </fieldset>
                                   <h5 class="mt-2">Articles of Association(AOA)</h5>
                                  <fieldset class="form-group">
                                      <p class="text-danger">(AOA)**</p> 
                                      <input type="file"    name="aoa">
                                  </fieldset>
                                   <h5 class="mt-2">Memorandum of Association(MOA)</h5>
                                  <fieldset class="form-group">
                                      <p class="text-danger">(MOA)**</p> 
                                      <input type="file"    name="moa">
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
                                        foreach($getPlanType as $CompanyType)
                                          {
                                             if($Companytdetails->comp_plan_type==$CompanyType->c_type_id)
                                          {
                                             echo '<option value="'.$CompanyType->c_type_id.'" selected>'.$CompanyType->c_type_name.'</option>';
                                          }
                                          else
                                          {
                                             echo '<option value="'.$CompanyType->c_type_id.'">'.$CompanyType->c_type_name.'</option>';
                                          }
                                           
                                         
                                        
                                        }?>
                                      </select>
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
  $('.deleteincorporation').on('click',function(){
    var element=$(this);
      var deleteimage=$(this).attr('incorp_id');
     var imgString=$("#incorporation_String").val();
     $.ajax({
      url:"<?=base_url('Admin_Company/deleteincorporation_String')?>",
      type:"post",
      data:{imgIndex:deleteimage,imgString:imgString},

      success:function(response){
        // console.log(response)
        response=JSON.parse(response);
        console.log('con', response.code);
        if(response.code==1){
          element.parent().remove();
          $('#incorporation_').val(response.newString);
          // console.log("sdfsdf"+response.newString)
        }
      }
     })
  })
 })
</script>
    <script type="text/javascript">
 $(document).ready(function(){
  $('.deleteaoa').on('click',function(){
    var element=$(this);
      var deleteimage=$(this).attr('aoa_id');
     var imgString=$("#aoa_String").val();
     $.ajax({
      url:"<?=base_url('Admin_Company/deleteAOA_String')?>",
      type:"post",
      data:{imgIndex:deleteimage,imgString:imgString},

      success:function(response){
        // console.log(response)
        response=JSON.parse(response);
        console.log('con', response.code);
        if(response.code==1){
          element.parent().remove();
          $('#aoa_').val(response.newString);
          // console.log("sdfsdf"+response.newString)
        }
      }
     })
  })
 })
</script>
   <script type="text/javascript">
 $(document).ready(function(){
  $('.deletemoa').on('click',function(){
    var element=$(this);
      var deleteimage=$(this).attr('moa_id');
     var imgString=$("#moa_String").val();
     $.ajax({
      url:"<?=base_url('Admin_Company/deleteMOA_String')?>",
      type:"post",
      data:{imgIndex:deleteimage,imgString:imgString},

      success:function(response){
        // console.log(response)
        response=JSON.parse(response);
        console.log('con', response.code);
        if(response.code==1){
          element.parent().remove();
          $('#moa_').val(response.newString);
          // console.log("sdfsdf"+response.newString)
        }
      }
     })
  })
 })
</script>
<script type="text/javascript">
 $(document).ready(function(){
  $('.deletegst').on('click',function(){
    var element=$(this);
      var deleteimage=$(this).attr('gst_id');
     var imgString=$("#gst_String").val();
     $.ajax({
      url:"<?=base_url('Admin_Company/deleteGST_String')?>",
      type:"post",
      data:{imgIndex:deleteimage,imgString:imgString},

      success:function(response){
        // console.log(response)
        response=JSON.parse(response);
        console.log('con', response.code);
        if(response.code==1){
          element.parent().remove();
          $('#gst_').val(response.newString);
          // console.log("sdfsdf"+response.newString)
        }
      }
     })
  })
 })
</script>
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