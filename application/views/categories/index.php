<div class="container">
	<div class="categorypage">
		<h5 class="secondetitle"><?=$title; ?></h5>
		<div class="row">
			<ul class="list-group">
			<?php foreach($categories as $category): ?>
				<li class="list-group-item"><a href="<?php echo site_url('/categories/posts/' . $category['id']); ?>"><?php echo $category['name']; ?></a></li>
			<?php endforeach; ?>	
			</ul>
		</div>
	</div>
</div>