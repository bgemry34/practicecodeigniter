<h2 style="text-align:center;"><?=$title?></h2>
<?php foreach($posts as $post): ?>
<h3><?=$post['title']?></h3>
<div class="row">
	<div class="col-md-3">
	<img class="img-thumbnail" src="<?=site_url();?>assets/images/posts/<?=$post['post_image'];?>" alt="" srcset="">
	</div>
	<div class="col-md-9">
	<small style="background-color:#f4f4f4;">Posted on: <?=$post['created_at'];?> in <strong><?=$post['name']?></strong></small><br>
	<p><?=word_limiter($post['body'],50);?>
	<a href="<?=site_url('/posts/'.$post['slug']);?>" class="btn btn-link" style="padding:0; color:blue; text-decoration:none;">Read More</a></p>
	<a href="<?=site_url('/posts/'.$post['slug']);?>" class="btn btn-default">Read More</a>
	</div>
</div>

<?php endforeach; ?>>
<div class="pagination-links text-center">
<?php echo $this->pagination->create_links(); ?>
</div>
