<?php

	$random = rand(11,16);
	$file = fopen('chargen/file/factor.txt','r');
		
	while ($file) {
		$line = fgets($file);
		if ($random == substr($line,0,2)) {
			$cut = 2;
			$factor = substr($line,$cut,strlen($line)-$cut);
			break;
			}
	}
	
	