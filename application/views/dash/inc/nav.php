	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo base_url('dash');?>">Hi! <small><?php echo $_SESSION['name'];?></small></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class=" nav navbar-nav navbar-right">
      <li class="nav-item active">
        <a href="<?php echo site_url();?>home/logout">Logout</a>
      </li>
    </ul>
  </div>
</nav>