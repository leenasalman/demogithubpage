header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

$apiKey = "AIzaSyCiGJQRJQ_IyycIgeXIqVVVspoj_7i55YE";
$placeId = "ChIJXdA7Y5FpXz4Rl0MVSjKjx9U";
$url = "https://maps.googleapis.com/maps/api/place/details/json?place_id=$placeId&fields=reviews&key=$apiKey";

$response = file_get_contents($url);
echo $response;
