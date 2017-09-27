<div class="container">
  <div class="createpostpage"> 
    <h5><?= $title; ?></h5>
    <div class="row">
      <div class="col-md-12">
        <?php echo validation_errors(); ?>
        <?php echo form_open_multipart('posts/create'); ?>
        <form>
          <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" name="title" placeholder="Add Title">
            <small id="emailHelp" class="form-text text-muted">Hi just give me tilte :).</small>
          </div>
          <div class="form-group">
            <label>Body</label>
            <textarea id="ckediter" class="form-control" name="body" placeholder="Add Body"></textarea>
          </div>
          <div class="form-group">
          	<label>Category</label>
          	<select name="category_id" class="form-control">
        	  	<?php foreach($categories as $category): ?>
        	  		<option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
        	  	<?php endforeach; ?>	
          	</select>
          </div>
          <div class="form-group">
        	  <label>Upload Image</label>
        	  <input type="file" name="userfile" size="20">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>

        </form>
      </div>
    </div>
  </div>
</div>