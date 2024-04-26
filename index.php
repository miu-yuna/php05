<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ登録</title>
  <style>div{padding: 10px;font-size:16px;}
  
  body {
	margin: 0px;
	padding: 0px;
	-webkit-text-size-adjust: none;
	color: #666;	/*全体の文字色*/
	font-family: "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", "メイリオ", Meiryo, Osaka, "ＭＳ Ｐゴシック", "MS PGothic", sans-serif;	/*フォント種類*/
	font-size: 16px;	/*文字サイズ*/
	line-height: 2;		/*行間*/
	background: #eff2eb;	/*背景色*/
}


  header {
	text-align: center;	/*内容を中央よせ*/
}
/*ロゴ画像設定*/
#logo img {
	width: 400px;	/*画像幅*/
	margin: 40px auto 40px;	/*ロゴの上と下に40pxスペースを空ける設定*/

}
.main{
  text-align: center;
}

/*メニュー
---------------------------------------------------------------------------*/
/*メニュー全体を囲むブロック*/
#menubar {
	text-align: center;		/*文字をセンタリング*/
	font-size: 18px;		/*文字サイズ*/
	margin-bottom: 40px;	/*下に空けるスペース*/
}
/*メニュー１個あたりの設定*/
#menubar li {
	display: inline;	/*横並びにする設定*/
}
#menubar li a {
	text-decoration: none;
	padding: 15px 30px;	/*各メニュー内の余白。上下に15px、左右に30pxあけるという意味。*/
}
/*マウスオン時の設定*/
#menubar li a:hover {
	color: #546247;	/*文字色*/
	border-bottom: 4px solid #546247;	/*下線の幅、線種、色*/
}

h1,h2,h3{
	clear: both;
	margin-bottom: 20px;
	color: #fff;		/*文字色*/
	padding: 10px 20px;	/*上下、左右への余白*/
	background: #546247;	/*背景色*/
	border-radius: 10px;	/*角を丸くする指定。この１行を削除すれば角丸がなくなります。*/
}
p{color: #666;		/*文字色*/
	padding: 10px 20px;	/*上下、左右への余白*/
}

.field {
  width: 50%;
  min-width: 9rem;
}
  
.input, textarea {
  float: left;
  width: 90%;
  border: none;
  margin: 0.5rem 0;
  padding: 0.5rem 1rem;
  border-radius: 0.3rem;
  background: darken(#f9f9f9, 10%);
  color: darken(#f9f9f9, 50%);
}
  </style>

</head>
<body>

<!-- Head[Start] -->
<header>
<nav class="navbar navbar-default">
    <div class="container-fluid">
    <h4 id="logo"><a href="index.php"><img src="img/logo.jpg" alt="SAMPLE SITE"></a></h1>
 
  </header>
<!-- Head[End] -->

<!-- Main[Start] -->


<div class="main">
  <img src="./img/kaeru2.jpg" alt="main"class="main-img">
 </div>
 
</div>

<nav id="menubar">
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="login.php">Login</a></li>
<li><a href="select.php">Gallery</a></li>
<li><a href="user.php">New</a></li>
</ul>
</nav>

<h2>About</h2>
<p>あなたのお家の素敵なカエル水槽テラリウムを登録しましょう！！</p>
<p>みんなのテラリウムを参考に水槽をどんどん魅力化しよう！！</p

>
<h3>Form</h3>

<form method="POST" action="insert.php" enctype="multipart/form-data">
  <div class="jumbotron">
   <fieldset class="field">
    <legend>form</legend>
    <label>user：<input type="text" name="user"></label><br>
     <label>title：<input type="text" name="title"></label><br>
     <label>画像：<input type="file" name="image"></label><br>
     <label>text：<textarea name="text" rows="4" cols="40"></textarea></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>


<script>


</script>

<a class="navbar-brand" href="logout.php">ログアウト</a>  
  
<!-- Main[End] -->



</body>
</html>
