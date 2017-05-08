<?php
	$ip = filter_input(INPUT_GET, "ip", FILTER_SANITIZE_STRING);
	$vs = filter_input(INPUT_GET, "versao", FILTER_SANITIZE_STRING);

	if(!isset($ip) || !isset($vs)) echo 'Parametros incorretos.';
	else {
		$get = file_get_contents("http://lists.sa-mp.com/{$vs}/hosted");

		if(strpos($get, $ip)) echo 'HOSTED';
		else echo 'FORA DO HOSTED';
	}
?>
