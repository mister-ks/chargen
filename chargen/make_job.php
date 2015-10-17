<?php

	$random = rand(11,20);
	$file = fopen('chargen/file/job.txt','r');
		
	while ($file) {
		$line = fgets($file);
		if ($random == substr($line,0,2)) {
			$cut = 2;
			$job = substr($line,$cut,strlen($line)-$cut);
			break;
			}
	}
	
	