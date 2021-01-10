<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if (!$_SESSION['name']) {
	redirect('home','refresh');
}
$id=$this->uri->segment(3);
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
    <?php 
     $employee_details= $this->db->get_where('employees', array('id'=>$id));
     foreach ($employee_details->result() as $employee) { ?>
       <tr>
         <th>Date</th>
         <td><?php echo $employee->date;?></td>
       </tr>
       <tr>
         <th>Name</th>
         <td><?php echo $employee->name;?></td>
       </tr>
       <tr>
         <th>Email</th>
         <td><?php echo $employee->email;?></td>
       </tr>
       <tr>
         <th>Phone</th>
         <td><?php echo $employee->phone;?></td>
       </tr>
       <tr>
         <th>Job</th>
         <td><?php echo $employee->job;?></td>
       </tr>
       <tr colspan="2">
         <td>
          <a href="<?php echo site_url('')?>employees/update_employee/<?php echo $employee->id;?>" class="btn btn-warning btn-l">Edit</a>
          <a href="<?php echo site_url('')?>employees/delete_employee/<?php echo $employee->id;?>" class="btn btn-danger btn-l">Delete</a>
         </td>
        
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