<?php
// require_once 'chargen/login.php';
session_start();
$_SESSION['id'] = session_id();
$error_message = "";

$clean = array();

if(preg_match('/^a-z.@/',$_POST['mail'])) {
	echo 'OK!';
} else {
	echo 'おい！';
}

$query = new mysqli("localhost","root","ks11030315","chargen");

if(isset($_POST['login'])) {
	
	if(!empty($_POST['mail']) && !empty($_POST['pass'])) {
		
		if (isset($_POST['mail']) && isset($_POST['pass'])) {
			
			if ($result = $query->query("select mail,pass from user")) {
			
				while($row = $result->fetch_assoc()) {
				
					if($_POST['mail'] === $row['mail'] && $_POST['pass'] === $row['pass']) {
						$_SESSION['mail'] = $_POST['mail'];
						header("Location: http://localhost/chargen/main.php");
						exit;
					}
				}
				if($row === NULL) {
					echo 'ユーザー名かパスワードがまちがっています！';
				}
				}
			} else {
			echo '正しいアドレスとパスワードを入力してください！';
			}
	} else {
	echo 'フォームを埋めてください。';
	}

} else {
	// echo '不正なログインです！';
	}
	


 
?>

<html>

<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css;charset=utf-8" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
</head>
<body>
<h1>CharacterGenerator</h1>

<form method="post" action="index.php">
<p>メールアドレス：<input class="form" type="text" name="mail" value="" /></p>
<p>パスワード：<input class="form" type="password" name="pass" value="" /></p>
<p><input class="class" type="submit" name="login" value="送信" /></p>
</form>


</body>

</html>