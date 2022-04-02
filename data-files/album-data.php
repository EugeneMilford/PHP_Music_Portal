<?php

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, "https://theaudiodb.p.rapidapi.com/album.php?i=112024");
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

$albums = json_decode($response, true);

// print_r($albums);

/* for($i=0; $i < 20; $i++){
    echo "<hr>";
    echo "<p>Album Name: ".$albums['album'][$i]['strAlbum']."</p>";
    echo "<p>Artist: ".$albums['album'][$i]['strArtist']."</p>";
    echo "<p>Year Released: ".$albums['album'][$i]['intYearReleased']."</p>";
    echo "<p>Genre: ".$albums['album'][$i]['strGenre']."</p>";
    echo "<hr>";
}
*/

 for($i=0; $i < 10; $i++){
$img = $albums['album'][$i]['strAlbumThumb'];

$imageData = base64_encode(file_get_contents($img));

echo '<section class="ls page_portfolio section_padding_top_100 section_padding_bottom_100">';
echo '<div class="container">';
echo '<div class="row">';
echo '<div class="col-sm-12">';
echo '<div class="isotope_container isotope row masonry-layout columns_margin_bottom_20" data-filters=".isotope_filters">';    

echo "<div class='isotope-item col-lg-4 col-md-6 col-sm-12 cat1'>";
echo "<div class='vertical-item gallery-item content-absolute text-center ds'>";
echo '<img src="data:image/jpeg;base64,'.$imageData.'" width="200" height="200">';
echo "<div class='media-links'>";
echo "<div class='links-wrap'> <a class=href='images/gallery/01.jpg'></a> </div>";
echo "</div>";
echo "</div>";
echo "<div class='item-content'>";
echo "<h4><a href='gallery-single.html'>".$albums['album'][$i]['strArtist']."</a></h4>"; 
echo "<h4><a href='gallery-single.html'>".$albums['album'][$i]['strAlbum']."</a></h4>";
echo "</div>";
echo "</div>";
echo "</div>";

echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</section>';

} 



 
















								


						





















							
						
						
							



								
									
									
										
											
											
										
									
										
									
										
									
								
								
									
							
						
							
						
						
