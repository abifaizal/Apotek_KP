<?php
if(isset($_SERVER['HTTP_USER_AGENT'])) {
	$user_agent = array("sqlmap", "curl", "bot");
	if(preg_match('/' . implode('|', $user_agent) . '/i', $_SERVER['HTTP_USER_AGENT'])) {
		header('HTTP/1.0 404 Not Found');
		exit;
	}
}

$conn = new mysqli("localhost", "root", "sepakbola", "apotekah");

function tgl_indo($tgl) {
	$tanggal = substr($tgl,8,2);
	$bulan = substr($tgl,5,2);
	$tahun = substr($tgl,0,4);
	return $tanggal.'/'.$bulan.'/'.$tahun;		 
}
function tgl_indo2($tgl) {
	$tanggal = substr($tgl,8,2);
	$bulan = substr($tgl,5,2);
		if($bulan == 01) {
			$bulan = "Jan";
		} else if($bulan == 02) {
			$bulan = "Feb";
		} else if($bulan == 03) {
			$bulan = "Mar";
		} else if($bulan == 04) {
			$bulan = "Apr";
		} else if($bulan == 05) {
			$bulan = "Mei";
		} else if($bulan == 06) {
			$bulan = "Jun";
		} else if($bulan == 07) {
			$bulan = "Jul";
		} else if($bulan == 8) {
			$bulan = "Agus";
		} else if($bulan == 9) {
			$bulan = "Sep";
		} else if($bulan == 10) {
			$bulan = "Okt";
		} else if($bulan == 11) {
			$bulan = "Nov";
		} else if($bulan == 12) {
			$bulan = "Des";
		}
	$tahun = substr($tgl,2,2);
	return $tanggal.'/'.$bulan.'/'.$tahun;		 
}

function base_url($path = null) {
	$url = "http://".$_SERVER['HTTP_HOST'] .str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
	return $url.$path;
}

$base_url = "http://localhost/KP_AmanahHusada/";

$title_web = "Amanah Husada";


date_default_timezone_set('Asia/Jakarta');
$now = date("Y-m-d H:i:s");
?>