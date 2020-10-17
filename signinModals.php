<?php


?>

<!-- Modal -->
<script src='https://www.google.com/recaptcha/api.js'></script>

<div class="modal fade" id="empsignup" tabindex="-1" role="dialog" aria-labelledby="myEmployerModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="background-image: url(img/bgbg.png); box-shadow: 10px 10px 20px #1e1e1e;">
      <div class="modal-header">
        <button id="signUpCloseBtn" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myEmployerModalLabel">New Account</h4>
      </div>
      <div class="modal-body">
 	<div id="cd-empsignup"> <!-- sign up form -->
            <div id="result" style="display:none;"></div>
            
            <div class="container">

                <ul class="nav nav-tabs" style="width: 40%;">
    <li class="active"><a data-toggle="tab" href="#home">User Register</a></li>
    <li><a data-toggle="tab" href="#menu1">Branch Register</a></li>
   
  </ul>

  <div class="tab-content">
      <div id="home" class="tab-pane fade in active" style="width: 50%;">
      <h3>Register as User</h3>
      <form class="cd-form" method="post" action="registerUB.php" >
					<p class="fieldset">
						<label class="image-replace cd-username" for="empsignup-username">Username</label>
						<input class="full-width has-padding has-border" id="name" name="name" type="text" placeholder="Username">
						
					</p>

					<p class="fieldset">
						<label class="image-replace cd-email" for="empsignup-email">E-mail</label>
                                                <input class="full-width has-padding has-border" id="email" name="email" type="email" placeholder="E-mail">
						
					</p>

					<p class="fieldset">
						<label class="image-replace cd-password" for="empsignup-password">Password</label>
                                                <input class="full-width has-padding has-border" id="password" name="password" type="password"  placeholder="Password">
						<a href="#0" class="hide-password">Show</a>
						
					</p>
                                        
                                        
                                    

					
                                        
                                       
					<p class="form-group">
                                            <button id="regsubmit" type="submit" class="full-width has-padding btn-success"  style="padding:10px; box-shadow: 0px 0px 20px #156785;">Create account</button>
					</p>
                                       
				</form>

    </div>
    <div id="menu1" class="tab-pane fade"  style="width: 50%;">
      <h3>Register as Branch</h3>
      <form class="cd-form" method="post" action="registerUB.php" enctype="multipart/form-data">
					<p class="fieldset">
						<label class="image-replace cd-username" for="empsignup-username">Branch Name</label>
                                                <input class="full-width has-padding has-border" id="name" name="Bname" type="text" placeholder="Branch Name">
						
					</p>

					<p class="fieldset">
						<label class="image-replace cd-email" for="empsignup-email">Branch E-mail</label>
						<input class="full-width has-padding has-border" id="email" name="Bemail" type="email" placeholder="Branch E-mail">
						
					</p>

					<p class="fieldset">
						<label class="image-replace cd-password" for="empsignup-password">Password</label>
                                                <input class="full-width has-padding has-border" id="password" name="Bpassword" type="password"  placeholder="Password">
						<a href="#0" class="hide-password">Show</a>
					
					</p>
                                       <p class="fieldset">
						<label class="image-replace cd-email" for="empsignup-email">Branch Address</label>
						<input class="full-width has-padding has-border" id="Badd" name="Badd"  placeholder="Branch Address">
						
					</p>
                                        
                                       
					<p class="form-group">
                                            <button id="regsubmit" type="submit" class="full-width has-padding btn-success" style="padding:10px; box-shadow: 0px 0px 20px #156785;">Register Branch</button>
					</p>
                                       
				</form>

    </div>
    
    
  </div>
</div>
            
				<!-- <a href="#0" class="cd-close-form">Close</a> -->
			</div> <!-- cd-empsignup -->

		
     
    </div>
  </div>
</div></div>


<div><button id="regEmpSuccessSubmit" data-toggle="modal" data-target="#regEmpSuccess" style="display: none">Success Message</button></div>



  <!-- Success Modal -->
  <div class="modal fade" id="regEmpSuccess" tabindex="-1" role="dialog" aria-labelledby="myEmployerModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <button id="empSignInCloseBtn" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myEmployerModalLabel"> Registration Successful! </h4>
      </div>
      <div class="modal-body">
        <div id="cd-login">
                    
                       
                        <br><span>Login to continue</span>
                    
						
                            
                            
                            <div class="center-block">
                              <button id="cancelEmpregModal" type="button" class="btn btn-default" data-dismiss="modal"  style="width: 150px;">Done</button>   
                              </div>
							
                                 
                         
                  
			 
		</div>
        </div>
    </div>
</div>
  </div> 
  
  
  
  
  
  