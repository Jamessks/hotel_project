<!DOCTYPE html>
<html lang="en">
<?php include_once 'views/common/head.php'; ?>

<style media="screen">
.navbar-top {
	display: block;
	font-family:RobotoR;
	font-size: 25px;
	background: linear-gradient(to right, #ffffff -40%, #666699 293%);
	color: white;
	padding-top: 30px;
	padding-bottom: 20px;
}

.navbar-list-primary {
	display: inline-flex;
	list-style: none;
	padding-left: 20px;
	justify-content: space-around;
	width: 50%;
}

.navbar-list-secondary {
	display: inline-flex;;
	float: right;
	list-style: none;
	padding-right: 20px;
}

.navbar-item {
	display: inline-block;
}

.clear {
	clear: both;
}

.navbar-link {
	text-decoration: none;
	padding-right: 10px;
	padding-left: 10px;
}

a.navbar-link:link, a.navbar-link:visited {
	color: black;
	text-align: center;
	text-decoration: none;
}

li.navbar-item:hover, li.navbar-item:active {
	border-bottom: 3px solid #3A3A3A;
}

.hover-border {
  border-bottom: 3px solid transparent;
  display: inline-block;
}

</style>
<body>
	<header>
		<section>
			<div class="navbar-top">
				<ul class="navbar-list-primary">
					<li class="navbar-item hover-border"><a class="navbar-link" href="hotels.php">Hotels</a></li>
					<li class="navbar-item hover-border"><a class="navbar-link" href="index.php">Home</a></li>
					<li class="navbar-item hover-border"><a class="navbar-link" href="contact.php">Contact Us</a></li>
					<li class="navbar-item hover-border"><a class="navbar-link" href="about.php">About</a></li>
				</ul>
				<ul class="navbar-list-secondary">
					<li class="navbar-item hover-border"><a class="navbar-link" href="login.php">Login</a></li>
				</ul>
				<div class="clear"></div>
			</div>
		</section>
	</header>
