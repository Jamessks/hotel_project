<!DOCTYPE html>
<html lang="en">
<?php include_once 'views/common/head.php'; ?>
<body>
	<header>
		<section class="topnav" id="heading-section">
			<nav>
				<ul class="topnav" id='heading-list'>
					<li class="heading-item <?= getURIpath() === '/index.php' ? 'active' : ''; ?>"><a class="nav-item" href="index.php"><i id="icon-home" class="fa fa-home icon icon-color-standard">
					</i>Home</a></li><li class="heading-item <?= getURIpath() === '/hotels.php' ? 'active' : ''; ?>"><a class="nav-item" href="hotels.php"><i id="icon-hotel" class="fa fa-hotel icon icon-color-standard">
					</i>Hotels</a></li><li class="heading-item <?= getURIpath() === '/contact.php' ? 'active' : ''; ?>"><a class="nav-item" href="contact.php"><i id="icon-contact" class="fa fa-envelope icon icon-color-standard">
					</i>Contact Us</a></li><li class="heading-item <?php if(getURIpath() === '/login.php' || getURIpath() === '/register.php'){echo 'active';} else { echo '';} ?>"><a class="nav-item" href="login.php"><i id="icon-contact" class="fa fa-user icon icon-color-standard"></i>Register/Login</a></li>
					<li href="javascript:void(0);" class="icon heading-item" onclick="myFunction()"><i class="fa fa-bars"></i></li>
				</ul>
			</nav>
		</section>
	</header>
	<div style="height: 50px;">
	</div>
