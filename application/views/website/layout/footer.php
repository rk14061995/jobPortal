
<!-- footer  -->
<footer class="container-fluid mt-5 banr_ol pt-5">
    <div class="container">
        <div class="row mb-5 mt-3">
            <div class="col-md-3">
                <div class="foot_e">
                    <h5>WHO WE ARE</h5>

                    <p>
                        Proin akshay handge vel velit auctor aliquet. Aenean sollicitudin,
                         Proin akshay handge vel velit auctor aliquet. Aenean sollicitudin,
                          Proin akshay handge vel velit auctor aliquet. Aenean sollicitudin,
                    </p>
                </div>
            </div>
            
            <div class="col-md-3">
                <!-- <div class="foot_e">
                    <h5>FOR CANDIDATE</h5>
                    <ul>
                        <li><a href="" >Add a Resume</a></li>
                        <li><a href="" >Job Alert</a></li>
                        <li><a href="" >Bookmark</a></li>
                    </ul>
                    
                </div> -->
            </div>
            <div class="col-md-3">
                <div class="foot_e">
                    <h5>FOR EMPLOYEERS</h5>
                    <ul>
                        <li><a href="<?=base_url('CompLogin')?>" >Browse Candidate</a></li>
                        <li><a href="<?=base_url('CompLogin')?>" >Add Job</a></li>
                        <li><a href="<?=base_url('CompLogin')?>" >Job Page</a></li>
                    </ul>
                    
                </div>
            </div>
            <div class="col-md-3">
                <div class="foot_e">
                    <h5>INFORMATION</h5>
                    <ul>
                        <li><a href="<?=base_url('Web')?>" >Home</a></li>
                        <li><a href="<?=base_url('About')?>" >About Us </a></li>
                        <li><a href="<?=base_url('Contact')?>" >Contact Us</a></li>
                        <li><a href="" > Terms & Conditions</a></li>
                    </ul>
                    
                </div>
            </div>
        </div>
        <hr style="border-color:white">

        <div class="p-2 text-center foot_e">
            <p class="m-0">© 2019-20 Job Pro. All Rights Reserved.</p>
        </div>
    </div>    
</footer>
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