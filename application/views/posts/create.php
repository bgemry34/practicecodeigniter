<h2><?=$title?></h2>
<?=validation_errors();?>
<?=form_open_multipart('posts/create');?>
	<!-- title -->
	<div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title" placeholder="Title...." >
	</div>
	
	<!-- category -->
	<div class="form-group">
		<label>Categories</label>
		<select name="category" class="form-control">
		<?php foreach($categories as $category): ?>
				<option value="<?=$category['id'];?>"><?=$category['name'];?></option>
		<?php endforeach; ?>
		</select>
	</div>

	<!-- body -->
  <div class="form-group">
    <label>Body</label>
    <textarea id=editor1 class="form-control" name="body" placeholder="Body..." ></textarea>
	</div>

	<!-- upload image -->
	<div class="form-group">
		<label>Upload Image</label>
		<input type="file" name="userfile" size="20">
	</div>
	<button type="submit" class="btn btn-primary pull-right">Submit</button>
	
  
</form>
