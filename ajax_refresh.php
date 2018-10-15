<?php

// PDO connect *********
// define ('DBUSER', 'root');
// define ('DBPASS','root');
// define ('DBNAME','test');

$dbstr = getenv('CLEARDB_DATABASE_URL');
$dbstr = substr("$dbstr", 8);
$dbstrarruser = explode(":", $dbstr);

$dbstrarrrecon = explode("?", $dbstrarrhost[1]);
$dbstrarrport = explode("/", $dbstrarrrecon[0]);
$dbpassword = $dbstrarrhost[0];
$dbhost = $dbstrarrport[0];
$dbport = $dbstrarrport[0];
$dbuser = $dbstrarruser[0];
$dbname = $dbstrarrport[1];
unset($dbstrarrrecon);
unset($dbstrarrport);
unset($dbstrarruser);
unset($dbstrarrhost);
unset($dbstr);

$server = 'mysql:host=' . $dbhost . ';dbname=' . $dbname;
$db = new PDO($server, $dbuser, $dbpassword);
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

// function connect() {
//     return new PDO('mysql:host=localhost;dbname=test;port=8889', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
// }

function connect() {
    return new PDO($server, $dbuser, $dbpassword, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}

$pdo = connect();
$keyword = $_POST['keyword'].'%';
$sql = "SELECT * FROM output WHERE starting_phrase LIKE (:keyword) ORDER BY count DESC LIMIT 0, 10";
$query = $pdo->prepare($sql);
$query->bindParam(':keyword', $keyword, PDO::PARAM_STR);
$query->execute();
$list = $query->fetchAll();
foreach ($list as $rs) {
	// put in bold the written text
	// $country_name = str_replace($_POST['keyword'], '<b>'.$_POST['keyword'].'</b>', $rs['following_word']);
	$predictor = $rs['starting_phrase'] . ' ' . $rs['following_word'];
	// add new option
    echo '<li onclick="set_item(\''.str_replace("'", "\'", $rs['following_word']).'\')">'.$predictor.'</li>';
}
?>