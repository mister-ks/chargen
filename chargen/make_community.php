<?php

	$random = rand(11,32);
	$file = fopen('chargen/file/community.txt','r');
		
	while ($file) {
		$line = fgets($file);
		if ($random == substr($line,0,2)) {
			$cut = 2;
			$community = substr($line,$cut,strlen($line)-$cut);
			break;
			}
	}
	
	