<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <h2>Register</h2>
    </div>
	<?php echo form_open('home/register_process');?>
    <!-- Login Form -->
    <form>
      <input type="email" id= class="fadeIn first" name="email" placeholder="email">
      <input type="text" class="fadeIn second" name="name" placeholder="Username">
      <input type="text" id="password" class="fadeIn third" name="pass" placeholder="password">
      <input type="submit" class="fadeIn fourth" name="reg" value="Register">
     <br>
     <p>Already Have Account <a href="<?php echo site_url('home');?>" class="#">Login</a></p>
    
   
    </form>
	<?php echo form_close();?>
    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>