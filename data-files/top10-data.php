<?php

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, "https://theaudiodb.p.rapidapi.com/mostloved.php?format=album");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($curl, CURLOPT_ENCODING, "");
curl_setopt($curl, CURLOPT_MAXREDIRS, 10);
curl_setopt($curl, CURLOPT_TIMEOUT, 30);
curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($curl, CURLOPT_HTTPHEADER, [
	"X-RapidAPI-Host: theaudiodb.p.rapidapi.com",
	"X-RapidAPI-Key: 2dbc831825msh84a073d47a621bap17f4cfjsn8a5f2a3cea0d"
	]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

$top10 = json_decode($response, true);

for ($i = 0; $i < 10; $i++) {  
echo "<div class='row'>";
echo "<div class='col-md-5 col-md-pull-7'>";
echo "<div class='card' style='width: 18rem;'>";
echo "<img class='card-img-top' src='...' alt='Card image cap'>";
echo "<div class='card-body'>";
echo "<p class='card-text'>Test of top 10</p>";
echo "<p class='card-text'>Num: </p>";
echo "</div>";
echo "<ul class='list-group list-group-flush'>";
echo "<li class='list-group-item'>Artist: ".$top10['loved'][$i]['strArtist']."</li>";
echo "<li class='list-group-item'>Artist: ".$top10['loved'][$i]['strAlbum']."</li>";
echo "<li class='list-group-item'>Year Released: ".$top10['loved'][$i]['intYearReleased']."</li>";
echo "<li class='list-group-item'>Genre: ".$top10['loved'][$i]['strGenre']."</li>";
echo "<li class='list-group-item'>Sales: ".$top10['loved'][$i]['intSales']."</li>";
echo "</ul>";
echo "</div>";
echo "</div>";
echo "<div class='col-md-7 col-md-push-5'>";
echo "<p class='card-text'>Description: </p>";
echo "<p class='card-text'>".$top10['loved'][$i]['strDescription']."</p>";
echo "</div>";
echo "</div>";
echo "<hr>";
}





