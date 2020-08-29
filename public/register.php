<?php $js_regScript = '<script type="text/javascript" src="js/third.js"></script>' ?>
<?php include '../app/views/common/header.php'; ?>
<img class="bg-image" src="<?= img_background ?>form-bg.jpg" alt="some background">
<section class="form user-form-register">
	<form class="form font-slim" novalidate method="POST" action="api/login.php">
		<div class="font-fat bottom-spacing-3">
			<h3 class="form-heading">Register</h3>
		</div>
		<div class="form-group bottom-spacing-1">
			<label for="reg_username">Username:*</label>
		<input id="reg_username" class="form-input border-solid border-round-light" type="text" name="loginEmail" value="" placeholder="Your username here" required>
		<ul id="reg_username_err_list" class="bullet-list-none err-list font-size-small">
			<li id="reg_username_err" class="err-msg hidden">Username must be 4 characters or more</li>
		</ul>
		</div>
		<div class="form-group bottom-spacing-1">
			<label for="reg_email">E-mail:*</label>
			<input id="reg_email" class="form-input border-solid border-round-light" type="text" name="loginEmail" value="" placeholder="Your e-mail address here" required>
			<ul id="reg_email_err_list" class="bullet-list-none err-list font-size-small">
				<li id="reg_email_err" class="err-msg hidden">Email address is not valid</li>
			</ul>
		</div>
		<div class="form-group bottom-spacing-1">
			<label for="reg_password">Password:*</label>
			<input id="reg_password" class="form-input border-solid border-round-light" type="password" name="loginPassword" value="" placeholder="Your password here" required>
			<ul id="reg_pass_err_list" class="bullet-list-none err-list font-size-small">
				<li id="reg_password_err" class="err-msg hidden">Password must be 8 characters or more</li>
			</ul>
		</div>
		<div class="form-group bottom-spacing-2">
			<label for="reg_confirm_pass">Confirm Password:*</label>
			<input id="reg_confirm_pass" class="form-input border-solid border-round-light" type="password" name="loginPassword" value="" placeholder="Confirm password here" required>
			<ul id="reg_confirm_pass_err_list" class="bullet-list-none err-list font-size-small">
				<li id="reg_confirm_pass_err" class="err-msg hidden">Passwords do not match</li>
			</ul>
		</div>
		<div class="bottom-spacing-3">
			<button class="form-submit" type="submit" name="submit"><i class="fa fa-sign-in icon">
			</i>Register</button>
		</div>
		<div class="bottom-spacing-1">
			<p class="font-size-subheading">Already have an account? Click <span><a href="login.php">here</a></span> to login!</p>
		</div>
		<div>
			<p class="font-size-subheading underlined">All fields with * are required</p>
		</div>
	</form>
</section>
<?php include '../app/views/common/footer.php'; ?>
