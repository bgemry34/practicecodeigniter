<h2><?=$title;?></h2>

<?=validation_errors();?>

<?=form_open_multipart('categories/create')?>
	<div class="form-group">
		<label>Name</label>
		<input type="text" name=" name" class="form-control" placeholder="Enter name">
	</div>
	<input type="submit" value="Submit" class="btn btn-default	">
</form>
