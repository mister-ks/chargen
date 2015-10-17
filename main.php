<?php
session_start();
/*
$_SESSION['ssid'] = session_id();
$error_message = "";
$login_url = "http://{$_SERVER["HTTP_POST"]}/main.php";

if(!isset($_SESSION['ssid'])) {
	echo 'ログインしてください！';
	session_destroy();
} else {
	header("Location:{$login_url}");
}
*/
?>

<html>

<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
</head>
<body>
<h1>CharacterGenerator</h1>
<p>※完成はしていますが、まだ未調整な部分が多くあります。<br />
特に、キャラクターを生成しようとした際に、タイムアウトして、エラーが出ることがあります。<br />
そのような場合には、Ｆ５キーでページをリロードしてください。お手間かけます。</p>

<?php require_once 'chargen/chargen.php' ; ?>

<?php echo "こんにちは".$_SESSION['mail']."さん！" ; ?>

<table>
	<tr>
		<th>性格</th>
		<th>詳細</th>
		<th>容貌</th>
		<th>性別</th>
		<th>所属</th>
		<th>出自</th>
		<th>出身地</th>
		<th>目</th>
		<th>身長</th>
		<th>体重</th>
		<th>体格</th>
		<th>趣味</th>
		<th>背景</th>
		<th>職業</th>
		<th>年齢</th>
	</tr>
	<tr>
		<td><?php require_once 'chargen/make_base.php'; echo $base ;?></td>
		<td><?php require_once 'chargen/make_detail.php'; echo $detail ;?></td>
		<td><?php require_once 'chargen/make_factor.php'; echo $factor ;?></td>
		<td><?php require_once 'chargen/make_sex.php'; echo $sex ;?></td>
		<td><?php require_once 'chargen/make_community.php'; echo $community ;?></td>
		<td><?php require_once 'chargen/make_descent.php'; echo $descent ;?></td>
		<td><?php require_once 'chargen/make_from.php'; echo $from ;?></td>
		<td><?php require_once 'chargen/make_eye.php'; echo $eye ;?></td>
		<td><?php $height = rand(120,180).'cm'; echo $height ;?></td>
		<td><?php $weight = rand(35,80).'kg'; echo $weight ;?></td>
		<td><?php require_once 'chargen/make_element.php'; echo $element ;?></td>
		<td><?php require_once 'chargen/make_hobby.php'; echo $hobby ;?></td>
		<td><?php require_once 'chargen/make_bground.php'; echo $bground ;?></td>
		<td><?php require_once 'chargen/make_job.php'; echo $job ;?></td>
		<td><?php $age = rand(10,35).'歳'; echo $age ;?></td>
	</tr>
</table>



</body>

</html>