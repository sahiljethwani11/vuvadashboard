



<html>
<head>

<link href="<?php echo $this->config->item("css"); ?>bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $this->config->item("css"); ?>style.css" rel="stylesheet">
<script src="<?php echo $this->config->item("js"); ?>jquery.js"></script>
<script src="<?php echo $this->config->item("js"); ?>bootstrap.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
<script>
$(document).ready(function(){
    $("#login-modal").modal("show");
});
</script>



<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
                <?php
$response = $this->session->flashdata("wrongpass");
echo (!empty($response) && $response == 'WRONG') ? "<h4  style='color:red;text-align:center;'>Invalid Credentials!</h4>" : "";?>
					<h1>Login to Your Account</h1><br>
				  <form action ="<?php echo $this->config->item("base_url") ?>index.php/login/reset_pass" method="POST">
					username:<input type="text" name="username" placeholder="Username">
					   email:<input type="email" name="email" placeholder="Password">
					<input type="submit" name="login" class="login loginmodal-submit" value="Login">
				  </form>
					
				  <div>
					 <a href="<?php echo $this->config->item("base_url")?>index.php/login/forgot_password"> Forgot Password </a>
				  </div>
                  <div class="login-help">
                  <input style ="margin-top:10px;"type="checkbox" class ="login-help" name="remember" value="remember"> Remember me
				  </div>
				</div>
			</div>
		  </div>
</body>
</html>