<?php
		//import config file
		require 'config.php';

		// Get current logged in User
		// $me = $pinterest->users->me();
		// echo $me;
		
		
		// Get logged in users boards
		// $boards = $pinterest->users->getMeBoards(); 
		// print_r($boards);

		//Crate new board 
		// $pinterest->boards->create(array(
		//     "name"          => "Test board from Pinterest API",
		//     "description"   => "Test Board From API Test"
		// ));
		

		// Add new image in board 
		$pinterest->pins->create(array(
		    "note"          => "Test pin from API",
		    "image"         => "./test.jpeg",
		    "board"         => "vaibhavrajdeveloper/test-board-from-pinterest-api"
		));
?>
