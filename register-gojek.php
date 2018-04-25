B<?php
/* 
SPAMER GOJEK
Mr.J49UN9_404
Terimakasih Semua
*/
$green  = "\e[92m";
$red    = "\e[91m";
$yellow = "\e[93m";
$blue   = "\e[36m";
system("clear");
sleep(2);
echo "$green+---------------::[# GOJEK - REGISTER #]::---------------+\n";
sleep(2);
echo "$green+----------------------[# Mr.J49UN9_404 #]----------------------+\n";
echo "\nNOMER HP   		: ";
$no = trim(fgets(STDIN, 1024));
echo "\nEMAIL   		: ";
$email = trim(fgets(STDIN, 1024));
echo "\nNAMA DEPAN		: ";
$name = trim(fgets(STDIN, 1024));
echo "\nNAMA PANJANG 		: ";
$last_name = trim(fgets(STDIN, 1024));
echo "\n$blue+---------------------[# RESULT #]---------------------+\n";
$no = substr(trim($no), 1);
//for ($x=1; $x<=$loop; $x++) {
	$c = curl_init();
	curl_setopt($c, CURLOPT_URL, "https://daftar.go-ride.co.id/supply/app/goride/v1/leads");
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
	curl_setopt($c, CURLOPT_POSTFIELDS,"utf8=%E2%9C%93&authenticity_token=gGLGuwfXbQHpeRAojUWgM%2FyrtqB9uvaVeqRXZ9c1INU4vXANqrzZsJkjirWlf7ZXKvzVB%2BJ3%2B8T4UYdT7Rwh0A%3D%3D&lead%5Bfirst_name%5D=".$name."&lead%5Blast_name%5D=".$last_name."&lead%5Bemail%5D=".$email."&lead%5Bcontact_no%5D=".$no."&lead%5Bcity%5D=1&lead%5Bterms_of_service%5D=1");
	curl_setopt($c, CURLOPT_POST, 1);
	$hasil = curl_exec($c);
	//FUNGSI FALSE
	if ($hasil == "Too Many Requests") {
		$loop += 1;
		echo "\e[91m$x. Code failed to send :(\n\e[97mCount +1\n".($loop-$x)." remaining\n\e[93mSleep in 60s\n";
		flush();
		sleep(60);		
	}
	else {
		echo "$red::[ $name|$last_name|$no|$email ]:: [ SUCCESS ]    \n";
		flush();
		sleep(7);		
	}
//}
echo "$green+------------------------------------------------------+\n";
echo "$red|      [#] $ green Mr.J49UN9_404 $ red [#]    |\n";
echo "$green+------------------------------------------------------+\n";
?>
