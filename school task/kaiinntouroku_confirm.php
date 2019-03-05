<?php
session_start ( );

?>



<html>
<head><meta charset="utf-8">


<title>Confirm Page</title>
</head>

<body>


<?php
$name=$_POST["r_name"];
$_SESSION["user_name"]=$name;

$phonenumber=$_POST["r_phonenumber"];
$_SESSION["user_phonenumber"]=$phonenumber;


$pw=$_POST["r_pw"];
$_SESSION["user_pw"]=$pw;

echo "登録データは、お名前が$name ,電話番号が$phonenumber ,パスワードが$pw です。よろしいですか？<br>";



?>

<form method="POST"action="kaiinntouroku_final_confirm.php">
<input type="submit"name="confirm"value="OK">





<input type="submit"name="back"value="NO">




</body>
</html>
