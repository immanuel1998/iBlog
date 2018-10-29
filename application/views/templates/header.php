<!DOCTYPE html>
<html>
<head>
	<title>iBlog</title>
	<link rel = "stylesheet" type = "text/css" 
         href = "<?php echo base_url(); ?>/assets/css/bootstrapMinty.min.css"> 

  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/style.css">
  <script src="<?php echo base_url(); ?>/assets/ckeditor/ckeditor.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/jquery-3.3.1.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>

</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  	<a class="navbar-brand" href="<?php echo base_url(); ?>">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation" style="">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor03">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>about">About</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>posts">Blog</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>categories">Categories</a>
      </li>
      
    </ul>
    <ul class="navbar-nav navbar-right">
    <?php if(!$this->session->userdata('logged_in')) : ?>
        
         <li> <a class="nav-link" href="<?php echo base_url(); ?>users/login">Login</a>  </li>

         <li> <a class="nav-link" href="<?php echo base_url(); ?>users/register">Register</a> </li>
      
    <?php endif; ?>
  </ul>

    <ul class="navbar-nav navbar-right">
    <?php if($this->session->userdata('logged_in')) : ?>
    
       <li> <a class="nav-link" href="<?php echo base_url(); ?>posts/create">Create Post</a> </li>

       <li> <a class="nav-link" href="<?php echo base_url(); ?>categories/create">Create Category</a> </li>

       <li> <a class="nav-link" href="<?php echo base_url(); ?>users/logout">Logout</a> </li>
    
    <?php endif; ?>
    </ul>
  </div>
</nav>	

<div class="container">

  <!-- Flash messages -->
    <?php if($this->session->flashdata('user_registered')): ?>
        <?php echo '<br>'; ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('post_created')): ?>
        <?php echo '<br>'; ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('post_updated')): ?>
        <?php echo '<br>'; ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_updated').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('category_created')): ?>
        <?php echo '<br>'; ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_created').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('post_deleted')): ?>
        <?php echo '<br>'; ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_deleted').'</p>'; ?>
    <?php endif; ?>

     <?php if($this->session->flashdata('login_failed')): ?>
        <?php echo '<br>'; ?>
        <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
    <?php endif; ?>

     <?php if($this->session->flashdata('user_loggedin')): ?>
        <?php echo '<br>'; ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('user_loggedout')): ?>
        <?php echo '<br>'; ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('category_deleted')): ?>
        <?php echo '<br>'; ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_deleted').'</p>'; ?>
    <?php endif; ?>

 





