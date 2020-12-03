    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
          <div class="content-body">
              <section class="textarea-select"> 
                <div class="row match-height">
                    <div class="col-lg-12 ">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Add Job Type</h4>
                            </div>
                            <div class="card-body">
                              <form id="insert">
                                <div class="row">
                                  <div class="col-lg-12">
                                    <label>Type Name</label>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-10">
                                    
                                    <input type="text" class="form-control" required placeholder="Example: Full Time" name="jtype"  >
                                  </div>
                                  <div class="col-md-2">
                                    <button type="submit" class="btn btn-success btn-min-width mr-1 mb-1">Add</button>
                                  </div>
                                </div>                                
                                  
                                    <!-- <p class="text-muted">Textarea description text.</p> -->
                                    
                                
                                <fieldset class="form-group">
                                    
                                </fieldset>
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
                      <th scope="col">Category Name</th>
                      <!-- <th scope="col">Icon</th> -->
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php
                   $i=1;
                   foreach($getJobtype as $jobtype)
                    {
                       // $myImages=explode(',',$category->category_icon);
                      // print_r($category);
                      ?>
                    <tr>
                      <th scope="row"><?=$i?></th>
                      <td><?=$jobtype->type_name?></td>
                      <td>
                       <a href="javascript:void(0)" type_id="<?=$jobtype->type_id?>" class="w-100 rounded-pill border-0 p-2  font-weight-bold butn-style1 delete">Delete</a></td>
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
            url:"<?=base_url('Admin_Job/addJobType')?>",
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
                    swal("Job Type!", "Try Again", "error")
                 }
                 if(obj.status==1)
                 {
                  swal("Job Type!", "Added", "success")
                 }
                 if(obj.status==2)
                 {
                 swal("Job Type!", "Already Exist", "error")
                 }
                $("#insert").load(location.href + " #insert");
            }
        
             });     
});
</script>
<script type="text/javascript">
        $(document).ready(function(){
          $('.delete').on('click',function(){ 
             var type_id=$(this).attr("type_id");

             // alert(owner_id);
           if(confirm("Are you Sure want to delete?") ==true)
            {       
            // alert(owner_id);         
                $.ajax({
                  url:"<?=base_url('Admin_Job/DeleteJobType')?>",
                  type:"post",
                  data:{type_id:type_id},
                  success:function(response)
                  {   
                  response=JSON.parse(response);             
                     if (response.status==1)
                      {
                        swal('Job Type!','Deleted','error');
                   
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