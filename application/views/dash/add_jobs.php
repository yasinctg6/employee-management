<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if (!$_SESSION['name']) {
	redirect('home','refresh');
}
?>
<!doctype html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <title>Dashboard</title>
  </head>
  <body>
	<?php $this->load->view('dash/inc/nav.php');?>

    <!--dash data-->
  <div class="container" style="padding-top: 20px">
    <div class="row">
    <!--sidebar-->
    <?php $this->load->view('dash/inc/sidebar');?>
    <!--sidebar-->
      <div class="col-lg-9 col-md-9">
        <div class="panel panel-default">
          <div class="panel-heading" style="background-color: green; font-weight: bold; padding-left: 20px; color: white">Add Job</div>
          <div class="panel-body">
            <?php echo form_open('jobs/add_jobs', 'class="form-horizontal"');?>
              <div class="form-group" style="padding-top: 20px">
                <input type="text" class="form-control input-sm" placeholder="Job Name" name="j_name">
              </div>
              <input type="submit" class="btn btn-sm btn-success" value="Add Job" name="add_job">
           <?php echo form_close();?>
          </div>
        </div>
      </div>
    </div>
  </div>

    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>