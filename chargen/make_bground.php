<?php

	$random = rand(11,17);
	$file = fopen('chargen/file/bground.txt','r');
		
	while ($file) {
		$line = fgets($file);
		if ($random == substr($line,0,2)) {
			$cut = 2;
			$bground = substr($line,$cut,strlen($line)-$cut);
			break;
			}
	}
	
	