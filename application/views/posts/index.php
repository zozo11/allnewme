<div class="container">
	<div class="mainpost">
		<h5 class="secondetitle"><?= $title ?></h5>
		<hr>
		<div class="row">
			<?php foreach ($posts as $post): ?>
				<div class="postslice hvr-curl-bottom-right">
					<div class="thirdtitle"><?php echo $post['title']; ?></div>	
					<div class="col-md-3">
						<img src="<?php echo base_url(); ?>/assets/images/posts/<?php echo $post['post_image']; ?>">
					</div>

					<div class="col-md-9">
						<small class="post-date">Posted on :<?php echo $post['created_at'] ?> in <?php echo $post['name'] ?></small><br>
						<?php echo word_limiter($post['body'], 70); ?>
						<br><br>
						<p><a class="btn btn-default" href="<?php echo site_url('/posts/' . $post['slug']); ?>">Read More</a></p>
					</div>
				</div>
			<?php endforeach; ?>
			<div class="pagination-link">
				<?php echo $this->pagination->create_links(); ?>
			</div>
		</div>
	</div>
</div>