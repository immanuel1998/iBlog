<br>

<h2 class="text-center"><?= $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('users/register'); ?>

<div align="center">
		<div class="col-md-4 col-md-offset-4">
	<div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text">Name</span>
      </div>
      <input type="text" class="form-control" name="name" required>
    </div>

	<div class="input-group mb-3">
		<div class="input-group-prepend">
		  <span class="input-group-text">Zipcode</span>
		  </div>
		 <input type="text" class="form-control" name="zipcode" required>
    </div>

    <div class="input-group mb-3">
		<div class="input-group-prepend">
		  <span class="input-group-text">Email</span>
		  </div>
		 <input type="text" class="form-control" name="email" required>
    </div>

    <div class="input-group mb-3">
		<div class="input-group-prepend">
		  <span class="input-group-text">Username</span>
		  </div>
		 <input type="text" class="form-control" name="username" required>
    </div>
	
	<div class="input-group mb-3">
		<div class="input-group-prepend">
		  <span class="input-group-text">Password</span>
		  </div>
		 <input type="password" class="form-control" name="password" required>
    </div>			
					
	<div class="input-group mb-3">
		<div class="input-group-prepend">
		  <span class="input-group-text">Confirm Password</span>
		  </div>
		 <input type="password" class="form-control" name="passwordconfirm" required>
    </div>				
	
		<button type="submit" class="btn btn-primary btn-block">Submit</button>
</div>
</div>
</div>
<?php echo form_close(); ?>