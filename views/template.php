<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="shortcut icon" href="theme/assets/img/favicon.png">
		<title><?= $data['header_title'] ?></title>
		<link href="theme/assets/css/bootstrap.css" rel="stylesheet">
		<link href="theme/assets/css/main.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Lato:300,400,900' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<?php require($data['view_modal']); ?>
		<?php require($data['body']); ?>
		<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
		<script src="theme/assets/js/bootstrap.min.js"></script>
		<script src="theme/assets/js/main.js"></script>
	</body>
</html>
