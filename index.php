﻿<!DOCTYPE html>
<html lang="ja">
<head>
<title>人生を変えた本</title>
</head>

<body style="font-family:'メイリオ',Meiryo;">
<h2 id="page_title">人生を変えた本</h2>

<a>右の項目からそれぞれの本のページへ</a>
<a  href="o-i!ryouma.html">「おーい！竜馬」のページへジャンプ</a>
<br><br>

<a>右の項目からそれぞれの本のページへ</a>
<a  href="roguinn1.php">ログインページへジャンプ</a>
<br><br>


<center>
<img src = "img/paku_akjfalsdjklasadfa.jpg"width="30％">
<br>
<form>
<input type= "button" value= "前へ" onClick = "change_photos();">&nbsp;
<input type= "button" value= "次へ" onClick = "change_photos();"><br>
</form>
</center>
<hr>

<img src = "img/gatag-00012739s.jpg"width="10％"alt="TAG index">&nbsp;
<img src ="img/gatag-00011414s.jpg"width="10％">&nbsp;
<img src ="img/gatag-00005420s.jpg"width="10％">&nbsp;
<img src ="img/gatag-00012234s.jpg"width="10％">&nbsp;
<img src ="img/gatag-00006829s.jpg"width="10％">&nbsp;




<body background="img/YAMAyamasha-09_TP_V.jpg">



<hr>



　　　　　　　　<table>
	<tr><th>本数</th><th>本の名前</th><th>著者</th><th>出版社</th></tr>
	<tr><td>1</td><td>おーい！竜馬</td><td>小山ゆう、武田鉄矢</td><td> 小学館</td></tr>
	<tr><td>2</td><td>小学館版学習まんが―少年少女日本の歴史</td><td>なし</td><td>小学館</td></tr>

</table>
	</tr>

</table>
<br>






<style>
h2 {
	color : white;
	/*background : navy;*/
}

h2 { font-size: 180%; }
	a {background :white;  color :navy; }



	th,td {background :white;  color :navy; }



</style>

<script>



 var photos = new Array(5);
 var p_no = 0;

        photos[0] = "img/gatag-00012739.jpg";
        photos[1] = "img/gatag-00011414.jpg";
        photos[2] = "img/gatag-00005420.jpg";
        photos[3] = "img/gatag-00012234.jpg";
        photos[4] = "img/gatag-00006829.jpg";
        


 function change_photos () {



if ( p_no == 4)
  { p_no=0; }
  else
  {  p_no++; }
  


document.images[0].src=photos[p_no]; }








</script>

</body>
</html>

