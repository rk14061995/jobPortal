<?php
include"header.php";
?>
<section class="container-fluid banr_ol">
	<div class="container py-5">
		<div class="abu_ct mt-5">
			<h3>Contact-Us</h3>
			<a href="index.php">Home</a><small class="mx-2"><i class="fas fa-chevron-right"></i></small> <span>Contact-Us</span>
		</div>
	</div>
</section>

<section class="container-fluid my-4">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224369.0356241299!2d77.25804458931252!3d28.51668171112809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce5a43173357b%3A0x37ffce30c87cc03f!2sNoida%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1587555800084!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</section>

<section class="my-4 container">
<div class="">
	<h4 class="Unf_ln my-4">LEAVE A MESSAGE</h4>
</div>
<div class="row">
	<div class="col-md-8">
		<div class="p-5 card">
			<form id="contact-form" name="contact-form" action="mail.php" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form">
                        	 <label for="name" class="">Your name</label>
                            <input type="text" id="name" name="name" class="form-control">
                           
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form">
                        	<label for="email" class="">Your email</label>
                            <input type="text" id="email" name="email" class="form-control">
                            
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form">
                        	<label for="subject" class="">Subject</label>
                            <input type="text" id="subject" name="subject" class="form-control">
                            
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                        	 <label for="message">Your message</label>
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                           
                        </div>

                    </div>
                </div>
                <!--Grid row-->
                <br>
                <div class="">
                	<button class="btn btn-default border">SEND MESSAGE</button>
                </div>
            </form>
		</div>
	</div>
	<div class="col-md-4">
		<div class="p-5" style="background-color: #23c0e9;color:white;padding:40px">
			<div class="">
				<h4>Contact Info</h4>
			</div>
			
				
			<div class="d-flex mt-3">
				<div class="">
					<span><i class="fas fa-map-marker-alt"></i></span>
				</div>
				<div class="ml-2">
					<span>Commercial Bank Plaza,<br> Level 14 West bay P.O.Box: 27111,<br> Doha – Qatar <br>Tel: +974 4452 8215</span>
				</div>
			</div>	
			<div class="d-flex mt-3">
				<div class="">
					<span><i class="fas fa-map-marker-alt"></i></span>
				</div>
				<div class="ml-2">
					<span>Lev el 41,<br> Emirates Tower P.O.Box: 31303,<br> Dubai – UAE <br>Tel: +971 4 313 2036</span>
				</div>
			</div>
			<div class="d-flex mt-3">
				<div class="">
					<span><i class="fas fa-envelope"></i></span>
				</div>
				<div class="ml-2">
					<span>info@premium-qatar.com</span>
				</div>
			</div>

		</div>
	</div>
</div>

</section>
<script type="text/javascript">
	$(document).ready(function(){
		$(".contact").addClass("active");
	})
</script>
<?php
include"footer.php";
?>