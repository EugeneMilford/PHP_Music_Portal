<?php

$curl = curl_init();


	curl_setopt($curl,CURLOPT_URL, "https://spotify23.p.rapidapi.com/albums/?ids=3IBcauSj5M2A6lTeffJzdv");
	curl_setopt($curl,CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl,CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($curl,CURLOPT_ENCODING, "");
	curl_setopt($curl,CURLOPT_MAXREDIRS, 10);
	curl_setopt($curl,CURLOPT_TIMEOUT, 30);
	curl_setopt($curl,CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
	curl_setopt($curl,CURLOPT_CUSTOMREQUEST, "GET");
	curl_setopt($curl,CURLOPT_HTTPHEADER, [
		"X-RapidAPI-Host: spotify23.p.rapidapi.com",
		"X-RapidAPI-Key: 2dbc831825msh84a073d47a621bap17f4cfjsn8a5f2a3cea0d"
	]);


$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

$k = json_decode($response, true);

?>

