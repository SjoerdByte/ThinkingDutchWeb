<?php
	$klantcode="thinkingdutch";
	$apikey="XMfXEvU3yJSUWKmdi0aPPephThcAVc";
	$userid="edwin";
	$reference="website_carsys";
	$templatename="carsys_welkom";

	$phonenumbers=array("+31 6 52007009");
	$klantnaam="Freek Boulogne";

	$messageObj = array(
		"apikey" =>  $apikey,
		'userid' => $userid,
		"messages" => array( array(
				"phone" => $phonenumbers,
				"reference" => $reference,
				"templatename" => $templatename,

				"parameters" => array(
					"customername" => $klantnaam
				)
			),
		),
	);


	$url = "https://{$klantcode}.tdmessenger.nl/api/submitmessage.php";
	$ch = curl_init();
	$optarray = array(
		CURLOPT_URL => $url,
		CURLOPT_HTTPHEADER =>array( "Accept: application/json", "Access-Control-Allow-Origin: *"),
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_SSL_VERIFYPEER => 1,
		CURLOPT_RETURNTRANSFER => 1,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
	    CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_POSTFIELDS => json_encode($messageObj)
	);
	curl_setopt_array($ch, $optarray);
	$json = curl_exec($ch);
	// $curl_info = curl_getinfo($ch);
	curl_close($ch);

	error_log("Output response: " . $json);
	// error_log("Output info: " . json_encode($curl_info));
?>