<div class="container">
	<div class="registerpage">
		<div class="row">
			<div class="col-sm-12 col-md-4"></div>
			<div class="col-sm-12 col-md-4">
			<?php echo validation_errors(); ?>
			<?php echo form_open('users/register'); ?>
				<h5 class="secondetitle"><?= $title; ?></h5>
				<div class="form-group">
					<label>Name</label>
					<input type="text" name="name" placeholder="Name" class="form-control">
				</div>
				<div class="form-group">
					<label>Zipcode</label>
					<input type="text" name="zipcode" placeholder="Zipcode" class="form-control">
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="text" name="email" placeholder="Email" class="form-control">
				</div>
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="username" placeholder="Username" class="form-control">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" placeholder="Password" class="form-control">
				</div>
				<div class="form-group">
					<label>Confirm Password</label>
					<input type="password" name="password2" placeholder="Confirm Password" class="form-control">
				</div>
				<button type="Submit" class="btn btn-primary btn-block">Submit</button>
			</div>
			<?php echo form_close(); ?>
			<div class="col-sm-12 col-md-4"></div>
		</div>
	</div>
</div>