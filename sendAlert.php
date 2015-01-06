<?php
include "sms-gateway/gateway.php";

$phone=$_POST['phonenumber'];

if(empty($phone) or !isset($phone)){
	echo json_encode(array("response"=>"please enter a phone number","success"=>"false"));
}else{
	
	
	$message="Hi, your cake order is ready,please pick it up";
	
	textCustomer($phone,$message);	
}


function textCustomer($phone,$message) {
	$username = "patikana";
	$apiKey = "201673b66ffa0c0b087126b86ae5eadbc786a74798e859bb6ebd71a5cfdaec41";
	$prefix = "+254";
	try {

		$gateway = new AfricasTalkingGateway($username, $apiKey);

		$phoneno = (int)$phone;
		$message = $message;

		$no = $prefix . $phoneno;

		// Thats it, hit send and we'll take care of the rest
		$results = $gateway -> sendMessage($no, $message);
		if (count($results)) {
			echo json_encode(array("response"=>"message sent","success"=>"true"));
		} else {
			echo json_encode(array("response"=>"message not sent","success"=>"false"));
		}

	} catch (AfricasTalkingGatewayException $e) {
		echo json_encode(array("response"=>$e -> getMessage(),"success"=>"false"));
	}
}





?>