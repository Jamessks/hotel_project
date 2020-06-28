<?php include_once 'app/functions/functions.php'; ?>
<?php include_once 'app/classes/Meta.php'; ?>
<?php include_once 'app/config/globals_config.php'; ?>
<?php $meta = new Meta; ?>
<head>
	<meta name="charset" content="UTF-8">
	<meta name="description" content="<?= $meta->getDescription(); ?>">
	<meta name="robots" content="noindex,nofollow">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $meta->getTitle();  ?></title>
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/media-queries.css">
	<link rel="stylesheet" href="css/room.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="/resources/demos/style.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="js/second.js"></script>
</head>
