<?php include "common/connect.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<?php include "common/head.php"; ?>
</head>
<body>
     
    <!--- header start from here ---> 
        <?php include "common/header.php" ?>
    <!--- header end here --->
        
   <!----------- contact_us page start from here ----------->
    <div class="contact-back">
       <div class="container">
  	      <div class="row">
  	 	     <div class="col-lg-12 col-md-12 col-sm-12">
  	 	 	     <h1 class="size-change font-size text-center padd-change text-white">Contact Us</h1>
  	 	     </div>
  	     </div>
       </div>
    </div>
   <!------------ contact_us page start from here ----->
  
   <!---- map start from here --->
   <div class="container">
       <div class="row">
           <div class="col-lg-12 col-md-12 col-sm-12">
               <div class="text-center mt-5 mb-5">
                    <div class="pt-5 pb-5">
                       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3327.008613728783!2d77.26948202529104!3d28.68380202563674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfc645fe4333f%3A0x3a4f8b81ce21d800!2sJafrabad%2C%20Shahdara%2C%20Delhi%2C%20110053!5e1!3m2!1sen!2sin!4v1775828725325!5m2!1sen!2sin" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>   
                    </div>
               </div>
           </div>
       </div>
   </div>
   <!--- map end here --->

   <!-- contact detail start from here -->
   <div class="container">
       <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="text-center background-effect mb-5">
                    <div class="pt-5 pb-5">
                        <h6 class="cont-font">Phone</h6>
                        <p class="p-inner pt-2 pb-2">+91 97329 02388</p>
                        <a class="button text-dec" href="tel:+919732902388">Call Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="text-center background-effect mb-5 ">
                    <div class="pt-5 pb-5">
                      <h6 class="cont-font">Address</h6>
                      <p class="p-inner pt-2 pb-2">Mukunda Das Pally, Thakurpukur, Delhi, 700104</p>
                      <a class="button text-dec" href="https://www.google.com/maps/place/Jafrabad,+Shahdara,+Delhi,+110053/@28.683802,77.269482,764m/data=!3m2!1e3!4b1!4m6!3m5!1s0x390cfc645fe4333f:0x3a4f8b81ce21d800!8m2!3d28.6841295!4d77.2721327!16zL20vMGY0X3M4?authuser=0&entry=ttu&g_ep=EgoyMDI2MDQwNy4wIKXMDSoASAFQAw%3D%3D">View Location</a>    
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="text-center background-effect mb-5">
                    <div class="pt-5 pb-5">
                        <h6 class="cont-font">Email Address</h6>
                        <p class="p-inner pt-2 pb-2">highpet@gmail.com</p>
                        <a class="button text-dec" href="mailto:highpet@gmail.com">Sent Message</a>
                    </div>    
                </div>
            </div>
            <hr>
       </div>
   </div>
   <br>
   <!-- contact detail end here -->

   
   <!--- --->
   <div class="container">
       <div class="row align-items-center">
           <div class="col-lg-7 col-md-6 col-sm-12">
               <div class="text-center text-lg-start">
                   <div class="mb-2">
                       <img src="assets/imgs/kitten-and-puppy-sitting-isolated-on-white-PSJ8Z9R.webp" width="85%">
                   </div>
               </div>
           </div>
           <div class="col-lg-5 col-md-6 col-sm-12">
               <div class="mt-5 text-center text-lg-start">
                  <h2 class="snd-fnt">Send us a Message</h2><br>
                   <form action="contact.php" method="post">
                        <input class="inpt-in" type="text" name="name" placeholder="Name"><br>
                        <input class="inpt-in" type="phone" name="phonenumber" placeholder="Phone"><br>
                        <textarea class="inpt-in" name="message" placeholder="Message" rows="5" cols="50"></textarea>
                        <br>
                        <button class="inpt-me">submit</button>
                   </form>
               </div>
           </div>
       </div>
   </div>
   <!--- --->

   <!---- footer of website start from here ---->
      <?php include "common/footer.php"; ?>
   <!---- footer end here ---->

</body>
</html>