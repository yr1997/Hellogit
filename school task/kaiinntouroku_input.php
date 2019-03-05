<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">

<title>会員登録システム</title></head>

<body>
<h1>会員登録システム</h1>
<p>登録する会員の名前を入力してしてください</p>
<form method = "post" action="kaiinntouroku_confirm.php">


名前　　　　<input type="text" name="r_name"><br><br>

電話番号　<input type="text" name="r_phonenumber"><br><br>

パスワード<input type="text" name="r_pw"><br><br>

<input  type="submit" name="s_button" value="登録" >

<input  type="reset">
</form>
</body>
</html>