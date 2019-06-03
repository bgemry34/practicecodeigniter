<h2><?=$title?></h2>
<?=validation_errors();?>
<?=form_open('posts/update');?>
	<input type="hidden" name="id" value="<?=$post['id'];?>">
  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title" placeholder="Title...." value="<?=$post['title'];?>">
  </div>
	<div class="form-group">
		<label>Categories</label>
		<select name="category" value="<?$post['name']?>" class="form-control">
		<?php foreach($categories as $category): ?>
				<option value="<?=$category['id'];?>"><?=$category['name'];?></option>
		<?php endforeach; ?>
		</select>
	</div>
  <div class="form-group">
    <label>Body</label>
    <textarea id=editor1 class="form-control" name="body" placeholder="Body..."><?=$post['body'];?></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
