<?php

	$random = rand(11,41);
	$file = fopen('chargen/file/base.txt','r');

	while ($file) {
		$line = fgets($file);
		if ($random == substr($line,0,2)) {
			$cut = 2;
			$base = substr($line,$cut,strlen($line)-$cut);
			break;
			}
	}
