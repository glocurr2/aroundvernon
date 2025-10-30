<?
header('Content-type: application/json');
$site = "http://widgets.fabulously40.com/horoscope.json?sign=";
$sign = $_GET['sign'];
$date = $_GET['date'];


if ($sign == "aquarius") {
$url = $site . "aquarius&date=" .$date;
} else if ($sign == "pisces") {
$url = $site . "pisces&date=" .$date;
} else if ($sign == "aries") {
$url = $site . "aries&date=" .$date;
} else if ($sign == "taurus") {
$url = $site . "taurus&date=" .$date;
} else if ($sign == "gemini") {
$url = $site . "gemini&date=" .$date;
} else if ($sign == "cancer") {
$url = $site . "cancer&date=" .$date;
} else if ($sign == "leo") {
$url = $site ."leo&date=" .$date;
} else if ($sign == "virgo") {
$url = $site . "virgo&date=" .$date;
} else if ($sign == "libra") {
$url = $site . "libra" . "&date=" .$date;
} else if ($sign == "scorpio") {
$url = $site . "scorpio" . "&date=" .$date;
} else if ($sign == "sagittarius") {
$url = $site . "sagittarius" . "&date=" .$date;
} else if ($sign == "capricorn") {
$url = $site . "capricorn" . "&date=" .$date;
}

$json=file_get_contents($url);
echo $json;

?>