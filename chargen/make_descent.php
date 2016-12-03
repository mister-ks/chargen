<?php

	$random = rand(11,30);
	$file = fopen('chargen/file/descent.txt','r');

	while ($file) {
		$line = fgets($file);
		if ($random == substr($line,0,2)) {
			$cut = 2;
			$descent = substr($line,$cut,strlen($line)-$cut);
			break;
			}
	}
