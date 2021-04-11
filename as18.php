<?php
echo "<a  target='_blank' href= 'https://github.com/Chubomber/upload/blob/master/as18.php'>github api.php</a>";
// death data of covid 19
main();

function main () {
	
	$apiCall = 'https://api.covid19api.com/summary';
	$json_string = curl_get_contents($apiCall);
	$obj = json_decode($json_string);

    //$deaths_arr = Array();
    foreach($obj->Countries as $i){
        echo = $i->Country . " : "
        . $i->TotalDeaths
        ."<br>";
    }

	$data = $obj->Global->NewConfirmed;



#-----------------------------------------------------------------------------
// read data from a URL into a string
function curl_get_contents($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}