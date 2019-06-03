<h2><?=$post['title']?></h2>
<small>Posted on: <?=$post['created_at'];?></small><br><br>
<img class="post_img" src="<?=site_url();?>assets/images/posts/<?=$post['post_image'];?>">
<p><?=$post['body'];?></p>

<hr>
<div style="display: inline-block">
<?=form_open('/posts/delete/'.$post['id']);?>
	 <input type="submit" value="Delete" class="btn btn-danger">
</form>
</div>

<a href="<?=base_url().'posts/edit/'.$post['slug'];?>" class="btn btn-default pull-right">Edit</a>
