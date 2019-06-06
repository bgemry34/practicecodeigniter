<h2><?=$title?></h2>
<?=validation_errors();?>
<?=form_open('users/register', 'style="padding:5px;"');?>
	<div class="form-group">
		<label for="">Name</label>
		<input type="text" name="name" class="form-control" placeholder="Name....">
	</div>
	<div class="form-group">
		<label for="">Zip Code</label>
		<input type="text" name="zipcode" class="form-control" placeholder="Zip Code....">
	</div>
	<div class="form-group">
		<label for="">Email</label>
		<input type="email" name="email" class="form-control" placeholder="Email....">
	</div>
	<div class="form-group">
		<label for="">Username</label>
		<input type="text" name="username" class="form-control" placeholder="Username....">
	</div>
	<div class="form-group">
		<label for="">Password</label>
		<input type="password" name="password" class="form-control" placeholder="password....">
	</div>
	<div class="form-group">
		<label for="">Confirm Password</label>
		<input type="password" name="confirmPassword" class="form-control" placeholder="Confirm Password....">
	</div>
	<input type="submit" value="Submit" class="btn btn-primary form-control">
<?=form_close();?>
