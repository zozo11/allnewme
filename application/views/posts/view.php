<div class="container">
	<div class="innerposet">
		<h5><?php echo $post['title']; ?></h5>
		<small class="post-date">Posted on :<?php echo $post['created_at'] ?></small><br>
		<hr>
		<div class="row">
			<div class="col-sm-12 col-md-12 postmianpart">
				<div class="postimage">
					<img src="<?php echo base_url(); ?>/assets/images/posts/<?php echo $post['post_image']; ?>">
				</div>
				<div class="post-body">
					<?php echo $post['body']; ?>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 postcomment">
				<?php if($this->session->userdata('user_id') == $post['user_id']): ?>
					<hr>
					<a class="btn btn-default pull-left" href="<?php echo base_url();?>posts/edit/<?php echo $post['slug']; ?>">Edit</a>
					<?php echo form_open('/posts/delete/' . $post['id']); ?>
						<input type="submit" value="delete" class="btn btn-danger">
					</form> 
				<?php endif; ?>
				
				<h5 class="secondetitle">Commnets</h5>
				<?php if($comments):?>

				 	<?php foreach ($comments as $comment): ?>
				 		<div class="commentswell">
							<p><?php echo $comment['body']; ?>[by <strong><?php echo $comment['name']; ?></strong>]</p>
						</div>
					<?php endforeach; ?>
				<?php else: ?>
					<p>Sorry No Comments To Display!</p>
				<?php endif; ?>
				<hr>
				<h5 class="secondetitle">Add Comment</h5>
				<div class="formstyle addcommen">
					<?php echo validation_errors(); ?>
					<?php echo form_open('comments/create/'.$post['id']); ?>
						<div class="form-group">
							<label>Name</label>
							<input type="text" name="name" class="form-control">
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="text" name="email" class="form-control">
						</div>
						<div class="form-group">
							<label>Body</label>
							<textarea name="body" class="form-control"></textarea> 
						</div>
						<input type="hidden" name="slug" value="<?php echo $post['slug']; ?>">
						<button class="btn btn-primary" type="submit">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>