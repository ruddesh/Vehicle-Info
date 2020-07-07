<?php 
	$db = new Users;
	$datas = $db->getAll();	
	$vehNums = $db->getUser();
	//$searchV = $db->searchV();