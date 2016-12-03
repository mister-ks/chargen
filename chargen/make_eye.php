<?php

	$random = rand(11,19);
	$file = fopen('chargen/file/eye.txt','r');

	while ($file) {
		$line = fgets($file);
		if ($random == substr($line,0,2)) {
			$cut = 2;
			$eye = substr($line,$cut,strlen($line)-$cut);
			break;
			}
	}
