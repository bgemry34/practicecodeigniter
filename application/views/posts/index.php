<h2><?=$title?></h2>
<?php foreach($posts as $post): ?>
<h2><?=$post['title']?></h2>
<small>Posted on: <?=$post['created_at'];?></small><br><br>
<p><?=$post['body'];?></p>
<a href="<?=site_url('/posts/'.$post['slug']);?>" class="btn btn-default">Read More</a>
<?php endforeach; ?>
