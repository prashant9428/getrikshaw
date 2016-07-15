 <div id="contact" class="getintouch">
				<div class="container">
					<div class="section-head text-center">
						<h3><span class="frist"> </span>GET IN TOUCH<span class="second"> </span></h3>
						<p> send us your valuable feedback. what should we have more to do to improve our services . or send us mail </p>
					</div>
					<!---->
					<div class="col-md-9 getintouch-left">
						<div class="contact-form col-md-10">
							<h3>Say hello!</h3>
							<form>
								<input type="text" name="sub" placeholder="subject" required />
								<input type="text"  name="email" placeholder="Email" required />
								<textarea placeholder="Message here" name="message" required /> </textarea>
								<input type="submit" name="mail" value="Send message" />
							</form>
						</div>
						<?php  
                                                
                                                if(isset($_GET['mail'])){
                                                    
                                                    $email =$_GET['email'];
                                                   
   ini_set("sendmail_from", "$email");  
   $to = "support@getrikshaw.com";//change receiver address  
   $subject = $_GET['sub'];   
   $message = $_GET['message']; 
   $header = "From:$email \r\n";  
  
   $result = mail ($to,$subject,$message,$header);  
  
   if( $result == true ){  
      echo "<script> alert('message send')</script>";  
   }else{  
     echo "<script> alert(' sorry message not send')</script>";  
   } 
   
                                                }
?>      
					</div>
					<div class="col-md-2 getintouch-left">
						<div class="footer-divice">
							<img src="images/divice-half.png" title="getintouch" />
						</div>
					</div>	
				</div>
			</div>

<div class="footer">
				<div class="container">
					<div class="footer-grids">
						<div class="col-md-3 footer-grid about-info">
							<a href="#"><img src="images/logo.png" title="Auto wala" /></a>
							<p>Address: C-9 near proffesssor colony rdvv pachpedi jabalpur
                                                           contact: 918989738466 ,8109824477. 
                                                           Email: pathakprashant840@gmail.com</p>
						</div>
						
						<div class="col-md-3 footer-grid explore">
							<div class="social-icons">
          <ul>
            <li><a class="envelope" href="#"><i class="fa fa-envelope"></i></a></li>
            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li> 
            <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a class="tumblr" href="#"><i class="fa fa-tumblr-square"></i></a></li>
          </ul>
        </div>
						</div>
						<div class="col-md-3 footer-grid copy-right">
							<p>. </p>
							<p class="copy">Get Rikshaw <a href="www.getrikshaw.vom"> Get Rikshaw</a></p>
						</div>
						<div class="clearfix"> </div>
						<script type="text/javascript">
							$(document).ready(function() {
								/*
								var defaults = {
						  			containerID: 'toTop', // fading element id
									containerHoverID: 'toTopHover', // fading element hover id
									scrollSpeed: 1200,
									easingType: 'linear' 
						 		};
								*/
								
								$().UItoTop({ easingType: 'easeOutQuart' });
								
							});
						</script>
							<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
					</div>
				</div>
			</div>