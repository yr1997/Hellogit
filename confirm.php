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

echo "登録データは、$name です。よろしいですか？<br>";

$s_id = $_POST['s_id'];
$dep = $_POST['department'];
$a_id = $_POST['a_id'];
$name = $_POST['name'];
$credit = $_POST['credit'];
$teacher = $_POST['teacher'];
$d_id = $_POST['d_id'];



if ( isset ($_POST["add"])){ //登録がクリックされたら//
$sql = "insert into final_5BHK1103 (ps, name,phonenumber)
values(:ps, :name, :phonenumber)";
$stmt = $dbh->prepare($sql);
$stmt->bindParam(":ps",$a_id);
$stmt->bindParam(":name",$name);
$stmt->bindParam(":phonenumber",$phonenumber);

$stmt ->execute();
echo "登録しました";

}

?>

<form method="POST"action="kadai1204.php">
<input type="submit"name="confirm"value="OK">





<input type="submit"name="back"value="NO">





</body>
</html>
