<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <h2>Login</h2>
    </div>
	<?php echo form_open('home/login_process');?>
    <!-- Login Form -->
    <form>
      <input type="text" id="login" class="fadeIn second" name="name" placeholder="Username">
      <input type="text" id="password" class="fadeIn third" name="pass" placeholder="password">
      <input type="submit" class="fadeIn fourth" name="login" value="LogIn as Admin">
     <br>
     <p>Not Have Accout <a href="<?php echo site_url('home/register');?>" class="#">Register</a></p>
    
   
    </form>
	<?php echo form_close();?>
    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>