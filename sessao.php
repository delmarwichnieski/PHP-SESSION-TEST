<?php
	//TRAINING
	function getRequestHeaders() {
		$headers = array();
		foreach($_SERVER as $key => $value) {
			if (substr($key, 0, 5) <> 'HTTP_') {
				continue;
			}
			$header = str_replace(' ', '-', ucwords(str_replace('_', ' ', strtolower(substr($key, 5)))));
			$headers[$header] = $value;
		}
		return $headers;
	}

	// $url = 'http://teste/producao/php/model/sessao.php'; 
	// $headersResponse1 = get_headers($url); //só pode ser usada em URL (creio que localmente não funciona, tem que ser na web)
	$headers_request1 = apache_request_headers();
	$headers_request2 = getallheaders();
	$headers_request3 = getRequestHeaders();
	$cookies = $_COOKIE;
	$server = $_SERVER;
	$request = $_REQUEST;
	$post = $_POST;
	$get = $_GET;

	$sessao_existe = $_COOKIE['PHPSESSID'] ?? false; //testar com acessos distintos navegador diferente

if($sessao_existe){
	session_start();
	$sid = session_id();
}else{
	$sid = md5('wuxiancheng.cn');
	session_id($sid);
	session_start();
	$session_id_igual_sid = (session_id() === $sid);// always false ??? FOR PHP 7.1.6 x64 VC14 CHANGE FROM session.sid_length = 26 PARA session.sid_length = 32 THEN GET TRUE
}

	$sess_id = session_id();

	// $headersResponse2 = get_headers($url);
	$fim = 'fim';
?>