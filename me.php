<?php
		require 'config.php';
		
		$me = $pinterest->users->me();
		echo $me;
?>