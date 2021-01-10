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
     <table class="table table-bordered">
       <tr>
         <th>ID</th>
         <th>Name</th>
         <th>details</th>
         <th>Edit</th>
         <th>Delete</th>
       </tr>
       <?php
       $employees_list=$this->db->get('employees');
       foreach ($employees_list->result() as $employee) { ?>
         <tr>
           <td><?php echo $employee->id;?></td>
           <td><?php echo $employee->name;?></td>
           <td><a href="<?php echo site_url('')?>employees/single_employee/<?php echo $employee->id;?>" class="btn btn-info btn-xs btn-block">Details</a></td>
           <td><a href="<?php echo site_url('')?>employees/update_employee/<?php echo $employee->id;?>" class="btn btn-warning btn-xs btn-block">Edit</a></td>
           <td><a href="<?php echo site_url('')?>employees/delete_employee/<?php echo $employee->id;?>" class="btn btn-danger btn-xs btn-block">Delete</a></td>
         </tr>
      <?php }
       ?>
     
     </table> 

      </div>
		</div>
	</div>
	<!--dash data-->
  	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>