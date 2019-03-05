
<html>
<head><meta charset="utf-8">


<title>Confirm Page</title>
</head>

<body>




<?php
session_start ( );

if( isset ( $_POST["confirm"])){ 

$name= $_SESSION["user_name"];
$pw= $_SESSION["user_pw"];
$phonenumber= $_SESSION["user_phonenumber"];




try{
	$dbh=new PDO('mysql:host=localhost;dbname=c2017a01','c2017a01','kuma85wai');
}catch(PDOException $e){
	echo $e->getmessage();
	exit;
}





$sql = "insert into final_5BHK1103 (pw, name,phonenumber)
values(:pw, :name, :phonenumber)";
$stmt = $dbh->prepare($sql);
$stmt->bindParam(":pw",$pw);
$stmt->bindParam(":name",$name);
$stmt->bindParam(":phonenumber",$phonenumber);

$stmt ->execute();







echo "$name さんのデータが登録されました。<br>";

$dbh=null;
 


}
else if( isset ( $_POST["back"])){ 
header ("Location:kaiinntouroku_input.php");

}

?>
<form method="POST"action="kaiinntouroku_final_confirm.php">
<input type="submit"name="back"value="NO">

</body>
</html>





