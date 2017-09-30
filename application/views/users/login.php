<div class="loginpage">
<div class="bg-login"></div>
	<?php echo form_open('users/login'); ?>
	<div class="container">
	<div class="row">
	<div class="col-sm-12 col-md-4"></div>
		<div class="loginwapper col-sm-12 col-md-4">
			<h5 class="text-center"><?php echo $title; ?></h5>
			<div class="login-wrap">
				<div class="form-group">
					<input type="text" name="username" class="form-control" placeholder="Enter Username" required autofocus>
				</div>
				<div class="form-group">
					<input type="password" name="password" class="form-control" placeholder="Enter Password" required autofocus>
				</div>
				<button class="btn btn-primary btn-block" type="submit">Login</button>
			</div>
		</div>
	<div class="col-sm-12 col-md-4"></div>
	</div>
	<?php echo form_close(); ?>
	</div>
</div>