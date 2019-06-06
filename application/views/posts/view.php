<h2><?=$post['title']?></h2>
<small>Posted on: <?=$post['created_at'];?></small><br><br>
<img class="post_img" src="<?=site_url();?>assets/images/posts/<?=$post['post_image'];?>">
<p><?=$post['body'];?></p>

<hr>

<?php if($this->session->userdata('user_id') == $post['user_id']):?>
<?=form_open('/posts/delete/'.$post['id']);?>
	 <input type="submit" value="Delete" class="btn btn-danger pull-left">
</form>

<a href="<?=base_url().'posts/edit/'.$post['slug'];?>" class="btn btn-default pull-right">Edit</a>
<br><br><hr style="background-color: black;height: 1px;">
<?php endif;?>

<h3>Comments</h3>
<hr style="background-color: black;height: 1px;">
<?php if($comments):?>
	<div class="row">
	<ul class="list-group">
	<?php foreach($comments as $comment): ?>
		<li class="list-group-item well">
		<h5><?=$comment['body'];?>[by <strong><?=$comment['name'];?></strong>]</h5>
		</li>
	<?php endforeach;?>
	</ul>
	</div>
<?php else:?>
	<p>No comment to Dispay</p>
<?php endif;?>
<h3 style="text-align: center;">Add Comment</h3>
<?=validation_errors();?>
<?=form_open('comments/create/'.$post['id'])?>
<div class="form-group">
	<label>Name:</label>
	<input type="text" name="name" class="form-control">
</div>
<div class="form-group">
	<label>Email:</label>
	<input type="email" name="userEmail" class="form-control">
</div>
<div class="form-group">
	<label for="">Comment:</label>
	<textarea name="body" class=form-control></textarea>
</div>
<input type="hidden" name="slug" value="<?=$post['slug'];?>">
<input type="submit" value="Submit" class="btn btn-primary pull-right">
</form>
