<html>
<head>
<meta charset="utf-8">

<title>Students DataBase:Search</title></head>

<body>
<form name="sample_form" method = "POST" action="roguinn2.php">

<br><br>
<input  type="submit" name="show_all" value="会員一覧表示" >
<br><hr><br>


ログインするためのパスワードを入力してください<br><br>

パスワード<input type="text" name="s_id"><br><br>
<input  type="submit" name="id_search" value="パスワードで検索" ><br><hr><br>


学部<input type="text" name="department">
（a：工学部　b：理学部　c：文学部）<br>
<input  type="submit" name="dep_search" value="学部で検索" ><br><hr><br>

登録データを入力してください<br><br>

学生番号<input type="text" name="a_id"><br><br>
名前<input type="text" name="name"><br><br>
取得単位<input type="text" name="credit"><br><br>
指導教官<input type="text" name="teacher"><br><br>
<input  type="submit" name="add" value="登録">
<br><hr><br>

削除する学生の学生番号を入力してください<br><br>

学生番号<input type="text" name="d_id"><br><br>
<input  type="submit" name="del" value="削除"><br>

</form>
</body>