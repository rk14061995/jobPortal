 <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
          <div class="content-header-left col-md-4 col-12 mb-2">
            <h3 class="content-header-title">View Jobs</h3>
          </div>
          <div class="content-header-right col-md-8 col-12">
            <div class="breadcrumbs-top float-md-right">
              <div class="breadcrumb-wrapper mr-1">
                <ol class="breadcrumb">
                  <!-- <li class="breadcrumb-item"><a href="index.html">User</a>
                  </li> -->
                 <!--  <li class="breadcrumb-item active">List
                  </li> -->
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="content-body"><!-- Basic Tables start -->
      
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              
              <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
              <div class="heading-elements">
                <ul class="list-inline mb-0">
                  <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                  <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                  <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                  <li><a data-action="close"><i class="ft-x"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="card-content collapse show">
              
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">SNo</th>
                      <th scope="col">Category</th>
                      <th scope="col">Type</th> 
                      <th scope="col">Company</th> 
                      <th scope="col">Title</th> 
                      <th scope="col">Decription</th> 
                      <th scope="col">Vacancies</th> 
                      <th scope="col">Last Date</th> 
                       <th scope="col">Status</th>
                       <th scope="col">ChangeStatus</th> 

                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php
                   $i=1;
                   foreach($getJobDetails as $JobDetails)
                    {
                       // $myImages=explode(',',$category->category_icon);
                       // print_r($JobDetails);
                       // die;
                      ?>
                    <tr>
                      <th scope="row"><?=$i?></th>
                        <td><?=$JobDetails->type_name?></td>
                        <td><?=$JobDetails->category_name?></td>
                        <td><?=$JobDetails->company_name?></td>
                        <td><?=$JobDetails->job_title?></td>
                        <td><?=$JobDetails->job_desc?></td>
                        <td><?=$JobDetails->vacancies_?></td>
                        <td><?=$JobDetails->last_date?></td>
                        <?php
                         if($JobDetails->job_apps_status=="active")
                        {?>
                          <td ><span class="btn-success" style="width:1%;height:100%;">Active</span></td>
                        <?php
                        }
                        else
                        {?>
                          <td ><span class="btn-danger" style="width:1%;height:100%;">Deactive</span></td>
                        <?php
                        }
                        if($JobDetails->job_apps_status=="active")
                        {?>
                           <td><a href="javascript:void(0)" deactivate_id="<?=$JobDetails->job_id?>" class=" deactivate" d-aplId=""></i>Deactivate</a></td>
                           
                        <?php
                        }
                        else
                        {?>
                           <td><a href="javascript:void(0)"  activate_id="<?=$JobDetails->job_id?>"class="  activate" d-aplId="">Activate</a></td>
                        <?php  
                        }?>
                        <td><a href="<?=base_url('Admin_Job/EditJob/').$JobDetails->job_id?>" job_id="<?=$JobDetails->job_id?>" class=" ">Edit</a>
                         <a href="javascript:void(0)" job_id="<?=$JobDetails->job_id?>" class=" delete">Delete</a></td>
                    </tr>
                    <?php
                    $i++;
                    }?>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      
        </div>
      </div>
    </div>
     <script type="text/javascript">
     $(document).ready(function(){
          $('.deactivate').on('click',function(){ 
               var deactivate_id=$(this).attr("deactivate_id");
               // alert(deactivate_id);
              $.ajax({
                url:'<?=base_url('Admin_Job/DeactivateSeekerApps')?>',
                type:"post",
                data:{deactivate_id:deactivate_id},
                 success:function(response)
                    {
                        response=JSON.parse(response);
                        // console.log(response.data);
                        if(response.status==1)
                        {
                        
                    swal("Users", "Status Change", "success");

                         }
                             location.reload();// $(".refreshlocation").load(location.href + " .refreshlocation");

                    }
              });
           });
      });
    </script>
    <script type="text/javascript">
     $(document).ready(function(){
          $('.activate').on('click',function(){ 
               var activate_id=$(this).attr("activate_id");
               // alert(activate_id);
              $.ajax({
                url:'<?=base_url('Admin_Job/ActivateSeekerApps')?>',
                type:"post",
                data:{activate_id:activate_id},
                 success:function(response)
                    {
                        response=JSON.parse(response);
                        // console.log(response.data);
                        if(response.status==1)
                        {
                        
                    swal("User", "Status Change", "success");

                         }
                             location.reload();// $(".refreshlocation").load(location.href + " .refreshlocation");

                    }
              });
           });
      });
    </script>
<script type="text/javascript">
        $(document).ready(function(){
          $('.delete').on('click',function(){ 
             var job_id=$(this).attr("job_id");

             // alert(owner_id);
           if(confirm("Are you Sure want to delete?") ==true)
            {       
            // alert(owner_id);         
                $.ajax({
                  url:"<?=base_url('Admin_Job/DeleteJob')?>",
                  type:"post",
                  data:{job_id:job_id},
                  success:function(response)
                  {   
                  response=JSON.parse(response);             
                     if (response.status==1)
                      {
                        swal('Job!','Deleted','error');
                   
                          location.reload();
                    
                       }
                  }
                 })                           
             // userPreference = "Data Delete successfully!";

             }
             else 
             {
              userPreference = "Save Canceled!";
              }
              
          })
        })  
      </script>