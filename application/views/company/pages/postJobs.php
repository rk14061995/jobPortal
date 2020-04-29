
  <div class="container">
    <?php
      $compData=unserialize($this->session->userdata('logged_company'));
      
    ?>
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Post New Job</h1>
                <hr>
              </div>
              <form class="user" id="compRegister">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Job Title" name="comp_name" value="">
                  </div>
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="exampleInputPassword" placeholder="Phone Number" name="comp_phone" value="<?=$compData[0]->comp_phone?>">
                  </div>
                  
                </div>
                <div class="form-group row">
                  <label>Job Description</label>
                  <div class="col-sm-12 mb-3 mb-sm-0">
                    <textarea class="form-control form-control-user" rows="5"placeholder="Job Description" >
                      
                    </textarea>
                   
                  </div>
                  
                  
                </div>
                
                <div class="form-group row">
                  <div class="col-md-3">
                    <label>Vaccancies</label>
                    <select class="form-control ">
                      <option>Vacancy</option>
                    </select>
                  </div>
                  <div class="col-md-3">
                    <label>Job Category</label>
                    <select class="form-control ">
                      <option>Category</option>
                       <?php foreach($Categories as $cat): ?>
                        <option><?=$cat->category_name?></option>
                      <?php endforeach;?>
                    </select>
                  </div>
                  <div class="col-md-3">
                    <label>Job Type</label>
                    <select class="form-control ">
                      <option>Job Type</option>
                      <?php foreach($Type as $ty): ?>
                        <option><?=$ty->type_name?></option>
                      <?php endforeach;?>
                    </select>
                  </div>
                  <div class="col-md-3">
                    <label>Last Date</label>
                    <input type="date" name="" class="form-control ">
                  </div>
                </div>
                <div class="form-group row">
                  <label>Skills Need</label>
                  
                  
                </div>
                <div class="form-group row">
                  <?php foreach($Skills as $skill): ?>
                    <div class="col">
                      <input type="checkbox" name="" value="<?=$skill->skill_id?>"> <?=$skill->skill_name?>
                    </div>
                      
                  <?php endforeach;?>
                  
                </div>
                <input type="submit" name="" value="Register Account" class="btn btn-primary btn-user btn-block">
       
              
              </form>
              <hr>
              
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  
  