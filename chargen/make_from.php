<?php

	$random = rand(11,26);
	$file = fopen('chargen/file/from.txt','r');
		
	while ($file) {
		$line = fgets($file);
		if ($random == substr($line,0,2)) {
			$cut = 2;
			$from = substr($line,$cut,strlen($line)-$cut);
			break;
			}
	}
	
	