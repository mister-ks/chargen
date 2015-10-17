<?php

	$random = rand(11,20);
	$file = fopen('chargen/file/age.txt','r');
		
	while ($file) {
		$line = fgets($file);
		if ($random == substr($line,0,2)) {
			$cut = 2;
			$age = substr($line,$cut,strlen($line)-$cut);
			break;
			}
	}
	
	