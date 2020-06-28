<?php include 'views/common/header.php'; ?>
<img class="form-bg" src="<?= img_background ?>form-bg.jpg" alt="some background">
<section class="user-form-login">
	<form class="font-slim" method="POST" action="api/login.php">
		<div class="font-fat bottom-spacing-3">
		<h3 class="form-heading">Login</h3>
		</div>
		<div class="form-group bottom-spacing-1">
		<label for="loginEmail">E-mail:</label>
		<input class="form-input border-solid border-round-light" id="loginEmail" type="text" name="loginEmail" value="" placeholder="Your e-mail address here" required>
	</div>
	<div class="form-group bottom-spacing-2">
		<label for="loginPassword">Password:</label>
		<input class="form-input border-solid border-round-light" id="loginPassword" type="password" name="loginPassword" value="" placeholder="Your password here" required>
	</div>
	<div class="bottom-spacing-3">
		<button class="form-submit" type="submit" name="submit"><i class="fa fa-sign-in icon">
		</i>Login</button>
	</div>
		<p class="font-size-subheading">No account? Click <span><a href="register.php">here</a></span> to register your account</p>
	</form>
</section>
<?php include 'views/common/footer.php'; ?>
