
  <div class="container">
    <?php
      $compData=unserialize($this->session->userdata('logged_company'));
    ?>
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block ">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Company Logo</h1>
                <hr>
              </div>
              <form class="user" id="compRegister">
                <div class="form-group row">
                  <div class="col-sm-12 mb-3 mb-sm-0">
                   <img src="<?=base_url('assets/CompanyImages/logo/').$compData[0]->company_logo?>" width="100%" onerror='this.src="<?=base_url('assets/CompanyImages/logo/default.png')?>"'>
                  </div>

                </div>
                <div class="form-group row">
                  <div class="col-sm-12 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Company Name" name="comp_name" value="<?=$compData[0]->company_name?>">
                  </div>

                </div>

                <input type="submit" name="" value="Upload Logo" class="btn btn-primary btn-user btn-block">
       
                
              
              </form>
              <hr>
              
            </div>
          </div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Company Details</h1>
                <hr>
              </div>
              <form class="user" id="compRegister">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Company Name" name="comp_name" value="<?=$compData[0]->company_name?>">
                  </div>
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="exampleInputPassword" placeholder="Phone Number" name="comp_phone" value="<?=$compData[0]->comp_phone?>">
                  </div>
                  
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                   <input type="email" name="comp_email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Company Email Address" value="<?=$compData[0]->company_email?>" readonly>
                  </div>
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="exampleInputPassword" placeholder="Company URL" name="comp_phone" value="<?=$compData[0]->website_url?>">
                  </div>
                  
                </div>
                <div class="form-group row">
                  
                  <div class="col-sm-12">
                    <input type="text" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Company Description" name="comp_pass" value="<?=$compData[0]->comp_desc?>">
                  </div>
                </div>
                <div class="form-group row">
                  
                  <div class="col-sm-12">
                    <input type="text" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Company Address" name="comp_pass" value="<?=$compData[0]->comp_address?>">
                  </div>
                </div>
                <input type="submit" name="" value="Update Account" class="btn btn-primary btn-user btn-block">
       
              
              </form>
              <hr>
              
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  
  