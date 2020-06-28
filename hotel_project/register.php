<?php include 'views/common/header.php'; ?>
<img class="form-bg" src="<?= img_background ?>form-bg.jpg" alt="some background">
<section class="user-form-register">
	<form class="font-slim" method="POST" action="api/login.php">
		<div class="font-fat bottom-spacing-3">
			<h3 class="form-heading">Register</h3>
		</div>
		<div class="form-group bottom-spacing-1">
			<label for="loginEmail">Username:*</label>
		<input class="form-input border-solid border-round-light" type="text" name="loginEmail" value="" placeholder="Your username here" required>
		</div>
		<div class="form-group bottom-spacing-1">
			<label for="loginEmail">E-mail:*</label>
			<input class="form-input border-solid border-round-light" type="text" name="loginEmail" value="" placeholder="Your e-mail address here" required>
		</div>
		<div class="form-group bottom-spacing-1">
			<label for="loginPassword">Password:*</label>
			<input class="form-input border-solid border-round-light" type="password" name="loginPassword" value="" placeholder="Your password here" required>
		</div>
		<div class="form-group bottom-spacing-2">
			<label for="loginPassword">Confirm Password:*</label>
			<input class="form-input border-solid border-round-light" type="password" name="loginPassword" value="" placeholder="Confirm password here" required>
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
<?php include 'views/common/footer.php'; ?>
