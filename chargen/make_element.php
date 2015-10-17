<?php

	$random = rand(11,25);
	$file = fopen('chargen/file/element.txt','r');
		
	while ($file) {
		$line = fgets($file);
		if ($random == substr($line,0,2)) {
			$cut = 2;
			$element = substr($line,$cut,strlen($line)-$cut);
			break;
			}
	}
	
	