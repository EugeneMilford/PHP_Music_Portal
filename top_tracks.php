<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://shazam.p.rapidapi.com/songs/list-artist-top-tracks?id=40008598&locale=en-US",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: shazam.p.rapidapi.com",
		"x-rapidapi-key: 2dbc831825msh84a073d47a621bap17f4cfjsn8a5f2a3cea0d"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}

?>
