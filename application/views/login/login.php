<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Flat Login Form</title>
	<link rel="stylesheet" href="<?php echo $this->config->item("css"); ?>hello_css/css/login.css">



  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
  


</head>

<body>


  <div class="container">
    <div class="info"></div>
  </div>
  <div id="loginForm" class="form">
    <div class="thumbnail">
      <img src="<?php echo $this->config->item("css"); ?>img/logo.png" />
		</div>
		<?php
      $response = $this->session->flashdata("wrongpass");
       echo (!empty($response) && $response == 'WRONG') ? "<h4 id='forget_msg' style='color:red;text-align:center; margin-top:10px;'>Invalid Credentials!</h4>" : "";?>
		  <br>
		<form class="register-form">
      <input type="text" placeholder="name" />
      <input type="password" placeholder="password" />
      <input type="text" placeholder="email address" />
      <button>create</button>
      <p class="message">Already registered?
        <a href="#">Sign In</a>
      </p>
    </form>
    <form class="login-form" action="<?php echo site_url('login/dologin'); ?>  " method = "POST">
      <input type="text" placeholder="username" name ="user"/>
      <input type="password" placeholder="password" name ="pass"/>
      <button  type="submit">Login</button>
      <p class="message">Not registered?
        <a href="#">Create an account</a>
      </p>
    </form>
  </div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>



  <script src="<?php echo $this->config->item("js"); ?>hello_js/js/login.js"> </script>




</body>

</html>