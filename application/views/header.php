<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?= $title;?></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
	
</head>
<body>
    <?php
//echo $this->uri->segment(1);  
echo $this->uri->segment(0);  
?>
        <header>
    <nav class="navbar navbar-default">  
  <div>  
    <div class="navbar-header">  
      <a class="navbar-brand" href="#">WebSiteName</a>  
    </div>  
    <ul class="nav navbar-nav">  
      <li class="<?php if($this->uri->segment(1)==""){echo "active";}?>"><a href="<?php echo base_url(); ?>">Home</a></li>  
      <li class="<?php if($this->uri->segment(1)=="aboutus"){echo "active";}?>"><a href="<?php echo base_url('index.php/aboutus'); ?>">About Us </a></li>  
      <li class="<?php if($this->uri->segment(1)=="login"){echo "active";}?>"><a href="<?php echo base_url('index.php/login'); ?>">Login</a></li>  
      <li class="<?php if($this->uri->segment(1)=="user"){echo "user";}?>"><a href="<?php echo base_url('index.php/user'); ?>">User</a></li>  
    </ul>  
  </div>  
</nav>  
    </header>