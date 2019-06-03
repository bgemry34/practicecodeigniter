<h2><?=$title?></h2>
<ul class="list-group">
	<?php foreach($categories as $category): ?>
		<li class="list-group-item">
		<a class="btn btn-link" style="text-decoration: none; color:blue; " href="<?=site_url('/categories/posts/'.$category['id'])?>">
		<?=$category['name'];?>
		</a>
		</li>
	<?php endforeach; ?>
</ul>
