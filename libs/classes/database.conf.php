<?php
	//Database archive
	//Created by: Joao Escudero <joaovescudero@gmail.com>
	//Git: http://github.com/joaovescudero/Projeto

	//Require configuration file
	include("conf.min.php");

	//Connect command
	$mysql = new mysqli($host, $user, $pass, $db);

	//If connection fail, show a error message and error number
	if (!$mysql) {
		printf("Can't connect to $host. Error: %s\n", mysqli_connect_error());
	}