<?php

webhookalpha("VV","vv@dd.com","socail","9852147","IN","Test");

function webhookalpha($name,$email,$contact_type,$mobile,$country,$requirement){
    $params = array(
		'project_name' => "Opris Exchange",
		'name' => $name,
		'email' => $email,
		'contact_type' => $contact_type,
		'mobile' => $mobile,
		'country' => $country,
		'requirement' => $requirement
	);
	$query = http_build_query($params, '', '&');
    $curl = curl_init();
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'http://164.92.128.14:5000/alphacrm/api/leads/addLeads');
    
    if ($_SERVER['HTTP_HOST'] == '164.92.128.14:5000') {
        // Proxy for Docker
        curl_setopt($ch, CURLOPT_PROXY, $_SERVER['SERVER_ADDR'] . ':' .  $_SERVER['SERVER_PORT']);
    }


    curl_setopt($ch, CURLOPT_URL, 'http://164.92.128.14:5000/alphacrm/api/leads/addLeads');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 100000);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $query);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    $response = curl_exec($ch);
    //curl_exec($ch);
    if (curl_errno($ch)) {
        $error_msg = curl_error($ch);
    }
    
    if (isset($error_msg)) {
        var_dump($error_msg);
    }
    curl_close($ch);
    
    var_dump($response);

}