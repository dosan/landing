<?php
error_reporting(E_ALL);

require_once('../config.php');
require_once('../models/Services.php');

$model = new Services();
$result = $model->findAll();

if($result)
	$res = ['success'=>1,'result'=>$result];
else
	$res = ['success'=>0,'result'=>[], 'message'=>'unexpected error'];

echo json_encode($res);
