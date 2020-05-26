
  <section class="container py-5" id="contact">
    <div class="row">
        <div class="col-md-4" >
            <div class="">
              <img src="<?=base_url('assets/newUi/')?>images/Logo.png" class="img-fluid w-50">
            </div>
            <div class="mt-3 ml-2">
                <ul class="list-unstyled footAdd">
                  <li>
                    <span><i class="fas fa-map-marker-alt"></i></span>
                    <span class="ml-2">Address</span>
                  </li>
                  <li>
                    <span><i class="far fa-envelope"></i></span>
                    <span class="ml-2">abc@gmail.com</span>
                  </li>
                  <li class="mt-2">
                     <span class="colgrn"><strong>(+91) 9854924852</strong></span><br>
                  </li>
                </ul>
               

                <ul class="mt-3 list-unstyled d-flex">
                  <li class="border-right">
                    <a href=" " class="px-2">
                      <img src="<?=base_url('assets/newUi/')?>images/Facebook.png" class="img-fluid  htWt15" >
                    </a>
                  </li>
                  <li class="border-right">
                     <a href=" " class="px-2">
                      <img src="<?=base_url('assets/newUi/')?>images/Google-Icon.png" class="img-fluid htWt15" >
                    </a>
                  </li>
                  <li class="">
                     <a href=" "  class="px-2">
                      <img src="assets/images/Instagram.png" class="img-fluid htWt15" >
                    </a>
                  </li>
                </ul>
            </div>

        </div>
         <div class="col-md-2">
            <div class="">
              <h6>COMPANY</h6>

              <ul class="mt-3 list-unstyled menUFo" >
                <li>
                  <a href=""><span>About Us </span></a>
                </li>
                <li>
                  <a href=""><span>Privacy Policy </span></a>
                </li>
                <li>
                  <a href=""><span>Terms And Conditions</span></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-2">
            <div class="">
              <h6>LINKS</h6>

              <ul class="mt-3 list-unstyled menUFo" >
                <li>
                  <a href=""><span>Employer</span></a>
                </li>
                <li>
                  <a href=""><span>Trending Job</span></a>
                </li>
                <li>
                  <a href=""><span>Blogs</span></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="">
              <h6>NEWSLETTER</h6>

                <div class="mt-3">
                    <span class="footAdd">
                      Join our email subscription now to get updates on <strong class="colgrn">new jobs</strong> and <strong class="colgrn">notifications</strong>
                    </span>
                </div>

                <div class="d-flex p-2 border rounded">
                  <input class="brd_non" name="" placeholder="Enter Your Email...">
                  <button class="btn pad23 grenbtn">Subscribe</button>
                </div>
            </div>
          </div>
    </div>  
    <hr>

    <div class="py-3 dsa_P">
         <small class="col_gr fnt11">&copy; 2020 <span class="colgrn">PremiumHR</span>. All Rights Reserved.</small>
         <div class="">
           <ul class="list-unstyled m-0 d-flex">
            <li class="px-2 border-right">
              <a href=""><small class="colgry fnt500">Find Work</small></a>
            </li>
            <li class="px-2 border-right">
              <a href=""><small class="colgry fnt500">Candidates</small></a>
            </li>
            <li class="px-2 ">
              <a href=""><small class="colgry fnt500">Employers</small></a>
            </li>
           </ul>
         </div>
    </div>    
  </section>

  <script type="text/javascript">
  $(document).ready(function(){
    $('#registerFormUser').submit(function(e){
      var formData=new FormData($(this)[0]);
      e.preventDefault();
      $.ajax({
        url:"<?=base_url('User/addUser')?>",
        type:"post",
        cache:false,
        contentType:false,
        processData:false,
        data:formData,
        success:function(response){
          // console.log(response);
          response=JSON.parse(response);
          if(response.code==1){
            swal("Great..","Registered Successfully.","success");
          }else{
            swal("Ooops..","Something went wrong","warning");
          }
        }
      });
    });
    $('#loginFormUser').submit(function(e){
      var formData=new FormData($(this)[0]);
      e.preventDefault();
      $.ajax({
        url:"<?=base_url('User/loginValidate')?>",
        type:"post",
        cache:false,
        contentType:false,
        processData:false,
        data:formData,
        success:function(response){
          // console.log(response);
          response=JSON.parse(response);
          if(response.code==1){
            swal("Great..","login Successfully.","success");
          }else{
            swal("Ooops..","Invalid Email/Password","warning");
          }
          setInterval(function(){
            location.reload();
          },2000)
        }
      });
    });    
  });
</script>
  </body>
</html>