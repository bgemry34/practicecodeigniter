<h2 style="text-align:center;"><?=$title?></h2>
<?php foreach($posts as $post): ?>
<h2><?=$post['title']?></h2>
<small style="background-color:#f4f4f4;">Posted on: <?=$post['created_at'];?></small><br>
<p><?=word_limiter($post['body'],50);?>
<a href="<?=site_url('/posts/'.$post['slug']);?>" class="btn btn-link" style="padding:0; color:blue; text-decoration:none;">Read More</a></p>
<a href="<?=site_url('/posts/'.$post['slug']);?>" class="btn btn-default">Read More</a>
<?php endforeach; ?>
