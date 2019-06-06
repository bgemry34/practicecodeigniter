<?=form_open('users/login');?>
<div class="rowq">
	<div class="col-md-4 col-md-offset-4">
		<h1 class="text-center"><?=$title?></h1>
		<div class="form-group">
			<input type="text" name="username" class=form-control placeholder="Enter Username...">
		</div>
		<div class="form-group">
			<input type="password" name="password" class=form-control placeholder="Enter Password...">
		</div>
		<a href="<?=base_url();?>users/register" class="btn btn-link" style="color: blue; text-decoration:none;">Register</a>
		<input type="submit" value="Log-in" class="pull-right btn btn-primary">
	</div>	
</div>
<?=form_close();?>
