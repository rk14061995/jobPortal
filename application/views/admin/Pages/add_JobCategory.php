<div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-body">
            <section class="textarea-select"> 
              <div class="row match-height">
                  <div class="col-lg-8 offset-md-2 col-md-12">
                      <div class="card">
                          <div class="card-header">
                              <h4 class="card-title">Add Job Category</h4>
                          </div>
                          <form id="insertcategory">
                          <div class="card-block">
                              <div class="card-body">
                                  <h5 class="mt-2">Category Name</h5>
                                  <fieldset class="form-group">
                                      <!-- <p class="text-muted">Textarea description text.</p> -->
                                      <input type="text" class="form-control" name="category" id="basicInput" >
                                  </fieldset>
                                   <h5 class="mt-2">Category Icon</h5>
                                  <fieldset class="form-group">
                                      <!-- <p class="text-muted">Textarea description text.</p> -->
                                      <input type="file" name="file" id="basicInput" >
                                  </fieldset>
                                  <fieldset class="form-group">
                                      <button type="button" class="btn btn-success btn-min-width mr-1 mb-1">Add</button>
                                  </fieldset>
                              </div>
                          </div>
                        </form>

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
      $(document).on('submit','#insertcategory',function(e){
              e.preventDefault();
        var formData= new FormData($(this)[0]);


      });
    </script>