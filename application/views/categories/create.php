<div class="container">
	<div class="createcatepage">
		<h5 class="secondetitle"><?= $title ;?></h5>
		<hr>
		<div class="row">
			<div class="col-md-12">
				<div class="formstyle">
					<?php echo validation_errors();?>
					<?php echo form_open_multipart('categories/create');?>
						<div class="form-group">
							<label>Name</label>
							<input type="text" class="form-control" name="name" placeholder="Enter name">
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>