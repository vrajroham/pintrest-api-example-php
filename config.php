<?php
		require "./vendor/autoload.php";
		use DirkGroenen\Pinterest\Pinterest;

		$appId = 'YOUR_APP_ID';
		$secret = 'YOUR_APP_SECRET';

		$pinterest = new Pinterest($appId, $secret);

		if (isset($_GET["code"])) {
	        $token = $pinterest->auth->getOAuthToken($_GET["code"]);
	        $pinterest->auth->setOAuthToken($token->access_token);
	        setcookie("access_token", $token->access_token);
	    } else if (isset($_GET["access_token"])) {
	        $pinterest->auth->setOAuthToken($_GET["access_token"]);
	    } else if (isset($_COOKIE["access_token"])) {
	        $pinterest->auth->setOAuthToken($_COOKIE["access_token"]);
	    } else {
	        // assert(false);
	    }

?>