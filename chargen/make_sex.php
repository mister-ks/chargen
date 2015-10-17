<?php

	$random = rand(11,16);
	$file = fopen('chargen/file/sex.txt','r');
		
	while ($file) {
		$line = fgets($file);
		if ($random == substr($line,0,2)) {
			$cut = 2;
			$sex = substr($line,$cut,strlen($line)-$cut);
			break;
			}
	}
	
	