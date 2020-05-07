<?php
$skill=$getSeekerdetails[0]->skill_ids;

?><div class="app-content content" id="refresh">
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-body">
            <section class="textarea-select"> 
              <div class="row match-height">
                  <div class="col-lg-8 offset-md-2 col-md-12">
                      <div class="card">
                          <div class="card-header">
                              <h4 class="card-title">Upadate Job Seeker</h4>
                          </div>
                          <div class="card-block">
                              <div class="card-body">
                                <form id="insert" >
                                  <?php
                                    foreach($getSeekerdetails as $Seekerdetails)
                                    {
                                      // print_r($Seekerdetails);
                                    
                                       
                                    
                                    ?>
                                    <h5 class="mt-2"> Name</h5>
                                  <fieldset class="form-group">
                                      <!-- <p class="text-muted">Textarea description text.</p> -->
                                      <input type="text" value="<?=$Seekerdetails->fullname?>" class="form-control" required  name="fullname">
                                       <input type="hidden" value="<?=$Seekerdetails->user_id?>"   name="user_id">                         
                                  </fieldset>
                                    <h5 class="mt-2">Basic Introduction</h5>
                                  <fieldset class="form-group">
                                      <!-- <p class="text-muted">Textarea description text.</p> -->
                                      <input type="text" value="<?=$Seekerdetails->basic_introduction?>"class="form-control" required  name="basic_introduction">                         
                                  </fieldset>
                                  <h5 class="mt-2">Skills</h5>
                                  <fieldset class="form-group">
                                      <!-- <p class="text-muted">Textarea description text.</p> -->
                                  <?php
                                  $skillNeeded = explode(',',$getSeekerdetails[0]->skill_ids);
                                  ?>
                                  <?php foreach($Skills as $skill): ?>
                                  
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

                                
                      
                                  <?php endforeach;?>                       
                                  </fieldset>
                                   <h5 class="mt-2">Address</h5>
                                  <fieldset class="form-group">
                                      <!-- <p class="text-muted">Textarea description text.</p> -->
                                      <input type="text" value="<?=$Seekerdetails->address_?>"class="form-control" required  name="address_">                         
                                  </fieldset>
                                   <h5 class="mt-2">Contact</h5>
                                  <fieldset class="form-group">
                                      <!-- <p class="text-muted">Textarea description text.</p> -->
                                      <input type="text" value="<?=$Seekerdetails->phone_?>"class="form-control" required  name="phone_">                         
                                  </fieldset>
                                  <h5 class="mt-2">Email</h5>
                                  <fieldset class="form-group">
                                      <!-- <p class="text-muted">Textarea description text.</p> -->
                                      <input type="email" value="<?=$Seekerdetails->email?>"class="form-control" required  name="email">                         
                                  </fieldset>
                                   <h5 class="mt-2">Password</h5>
                                  <fieldset class="form-group">
                                      <!-- <p class="text-muted">Textarea description text.</p> -->
                                      <input type="text" value="<?=$Seekerdetails->password?>"class="form-control" required  name="password">                         
                                  </fieldset>
                                  <h5 class="mt-2">Gender</h5>
                                  <fieldset class="form-group">
                                      
                                    <?php
                                    if($Seekerdetails->gender_=="Male")
                                      {?>
                                        <label for="male">Male</label>
                                          <input type="radio" checked value="male" required  name="gender_">
                                           <label for="Female">Female</label>
                                       <input type="radio" value="female" required  name="gender_"> 
                                      <?php
                                    }
                                    else
                                    {?>
                                      <label for="male">Male</label>
                                          <input type="radio"  value="male" required  name="gender_">
                                      <label for="Female">Female</label>
                                       <input type="radio" value="female" required checked name="gender_"> 
                                      <?php 
                                    }?>
                                    
                                                              
                                    
                                  </fieldset>
                                 
                                  <h5 class="mt-2">DOB</h5>
                                  <fieldset class="form-group">
                                      <!-- <p class="text-muted">Textarea description text.</p> -->
                                      <input type="text" value="<?=$Seekerdetails->dob_ ?>"class="form-control" required  name="dob_">                         
                                  </fieldset>
                                   <h5 class="mt-2">Previous Profile</h5>
                                  <fieldset class="form-group">
                                      <!-- <p class="text-muted">Textarea description text.</p> -->
                                     <input type="hidden" name="image_string" id="image_string" value="<?=$Seekerdetails->profile_pic?>" class="form-control">
                                    <ul>
                                    <?php
                                   
                                       $myImages=explode(',',$Seekerdetails->profile_pic);
                                      for($i=0; $i<count($myImages);$i++)
                                      {
                                        ?>
                                        <li style="  display:inline-block;">
                                          <img style="width:6em;height:6em;"src="<?php echo base_url().'assets/UserImages/profile_picture/'.$myImages[$i]?>" class="img-reponsive thumbnail">
                                       
                                         <a href="javascript:void(0)" img_id="<?=$i?>"  img_String="<?=$Seekerdetails->profile_pic?>" class="btn-info deleteimage">Delete</a>
                                       </li>
                                        <?php
                                      
                                      }
                                    ?>
                                  </ul>                       
                                  </fieldset>
                                   <h5 class="mt-2">Profile</h5>
                                  <fieldset class="form-group">
                                      <!-- <p class="text-muted">Textarea description text.</p> -->
                                      <input type="file"    name="file">                         
                                  </fieldset>
                                   <?php
                            }?>
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
      url:"<?=base_url('Admin_Job/deleteImageSeekers')?>",
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
            url:"<?=base_url('Admin_Job/updateJobSeeekers')?>",
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
                    swal("Seekers!", "Try Again", "error")
                 }
                 if(obj.status==1)
                 {
                  swal("Seekers!", "Update", "success")
                 }
                 if(obj.status==2)
                 {
                 swal("Seekers!", "Already Exist", "error")
                 }
                 window.location.href='<?=base_url("Admin_Dashboard/viewJobSeeker")?>';
            }
        
             });      
});
</script>