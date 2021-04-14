<html>
    <body>
<?php
echo "<a  target='_blank' href= 'https://github.com/Chubomber/upload/blob/master/as18.php'>github api.php</a> <br>";
// death data of covid 19
$str= "{";
    $country1 = "USA";
    $country2 = "China";
    $pop1 = 3000000;
    $pop2 = 20000000;

    $str = $str . '"';
    $str = $str . $country1;
    $str = $str . '"';
    $str = $str . ";";
    $str = $str . $pop1;
    $str = $str . ",";
    

    $str = $str . '"';
    $str = $str . $country2;
    $str = $str . '"';
    $str = $str . ";";
    $str = $str . $pop2;


    $str= $str . "}";
    echo $str;
   $j = json_decode ($str);
   echo $j->USA;
main();

function main () {
	
	$apiCall = 'https://api.covid19api.com/summary';
	$json_string = curl_get_contents($apiCall);
	$obj = json_decode($json_string);

   $arr1 = Array();
   $arr2 = Array();
    foreach($obj->Countries as $i){
        array_push($arr1, $i->Country);
       array_push($arr2, $i->TotalDeaths) ;
        
    }
    array_multisort($arr2, SORT_DESC, $arr1);
    echo $arr1[0] . ", ",$arr1[1] . ", ",$arr1[2] . ", ",$arr1[3] . ", ",$arr1[4] . ", ",$arr1[5] . ", ",
	$arr1[6] . ", ",$arr1[7] . ", ",$arr1[8] . ", ",$arr1[9];
}


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
   ?>
   </body>
   </html>
}