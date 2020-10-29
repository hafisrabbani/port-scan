<?php 
$abang = "\e[31m";
$kuning = "\e[33m";
$puti = "\e[39m";
$ijo = "\e[32m";
$biru = "\e[34m";


		print("__________              __      _________                                         
\______   \____________/  |_   /   _____/ ____ _____    ____   ____   ___________ 
 |     ___/  _ \_  __ \   __\  \_____  \_/ ___\\__  \  /    \ /    \_/ __ \_  __ \
 |    |  (  <_> )  | \/|  |    /        \  \___ / __ \|   |  \   |  \  ___/|  | \/
 |____|   \____/|__|   |__|   /_______  /\___  >____  /___|  /___|  /\___  >__|   
                                      \/     \/     \/     \/     \/     \/ \n");
		echo "$abang ===================================== \n";
		echo "$biru Author    : $puti   Hafis Rabbani \n";
		echo "$biru Github    : $puti   github.com/hafisrbbni \n";
		echo "$biru Instagram :	$puti@hafisrbbni_ \n";
		echo "$abang ===================================== \n";
		echo "$kuning don't use [HTTP/HTTPS] ex : domain.com => $puti ";
		$web = trim(fgets(STDIN));
		ini_set('max_execution_time', 0);
		ini_set('memory_limit', -1);
		$ports = array(21, 22, 23, 25, 43, 53, 110, 80, 81, 110, 143, 443, 465, 587, 2077, 2083, 2086, 2087, 2095, 2096, 2089, 2525, 3306);

		foreach ($ports as $port)
		{
		    $connection = @fsockopen($web, $port, $errno, $errstr, 2);

		    if (is_resource($connection))
		    {
		        echo $ijo, $web . ':' . $port . ' ' . '(' . getservbyport($port, 'tcp') . ') Open' . "\n";

		        fclose($connection);
		    }
		    else
		    {
		        echo  $abang, $web . ':' . $port . ' Not Found' . "\n";
		    }
		}
 ?>