<?php
require('../config.php');
require('../models/Mailer.php');
require('../models/Users.php');
require('../models/Validators.php');
$user = new Users();
if (isset($_POST['name']) && isset($_POST['email'])) {
	echo json_encode($user->insert(trim(strip_tags($_POST['name'])), $_POST['email']));
}else{
	echo json_encode($user->insert('', ''));
}