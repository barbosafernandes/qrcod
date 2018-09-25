<?php

	require_once 'vendor/autoload.php';
	 $n1 = $_GET["nome"];
	 $n2 = $_GET["email"];
	 $n3 = $_GET["data"];

	use Endroid\QrCode\QrCode;
	use Respect\Validation\Validator as v;

	$nome = v::stringType()->validate($n1);
	$email = v::email()->validate($n2);
	$data = v::date()->validate($n3);

	if ($nome == true && $email == true && $data == true) {

	$qrCode = new QrCode($n1);

	header('Content-Type: '.$qrCode->getContentType());	
	echo $qrCode->writeString();
	}else{ 
		echo "não PRESTA";
	}





?>