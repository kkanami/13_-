<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<%@ taglib prefix="s" uri="/struts-tags"%>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="imagetoolbar" content="no" />
<meta name="description" content="" />
<meta name="keywords" content="" />

<title>D.I>BLOG</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<header>
		<img src="image/diblog_logo.jpg">
		<div class="content">
			<ul class="menu">
				<li>トップ</li>
				<li>プロフィール</li>
				<li>D.I.Blogについて</li>
				<li>登録フォーム</li>
				<li>問い合わせ</li>
				<li>その他</li>
				<li> <a href='<s:url action="UserCreateAction"/>'>アカウント登録</a></li>
			</ul>
		</div>
	</header>

<!-- <main>エラーがでるので削除 -->
	<div class="main">
		<div class="left">
			<h1>プログラミングに役立つ書籍</h1>
			<div class="ymd">2017年1月15日</div>
			<br> <img src="image/bookstore.jpg">
			<p>D.I.BlogはD.I.Wroksが提供する演習課題です。</p>
			<br>
			<p>記事中身</p>
			<div class="main_menu">
				<div class="pic1">
					<img src="image/pic1.jpg">
					<p>ドメイン取得方法</p>
				</div>
				<div class="pic1">
					<img src="image/pic2.jpg">
					<p>快適な職場環境</p>
				</div>
				<div class="pic1">
					<img src="image/pic3.jpg">
					<p>Linuxの基礎</p>
				</div>
				<div class="pic1">
					<img src="image/pic4.jpg">
					<p>マーケティング入門</p>
				</div>
				<br>
				<div class="pic2">
					<img src="image/pic5.jpg">
					<p>アクティブラーニング</p>
				</div>
				<div class="pic2">
					<img src="image/pic6.jpg">
					<p>CSSの効率的な勉強方法</p>
				</div>
				<div class="pic2">
					<img src="image/pic7.jpg">
					<p>リーダブルコードとは</p>
				</div>
				<div class="pic2">
					<img src="image/pic8.jpg">
					<p>HTML5の可能性</p>
				</div>

			</div>

		</div>
		<div class="right">
			<h3>人気の記事</h3>
			<ul>
				<li><a href=""> PHPオススメ本</a></li>
				<li><a href="">PHP MyAdminの使い方</a></li>
				<li><a href="">いま人気のエディタTops</a></li>
				<li><a href="">HTMLの基礎</a></li>
			</ul>

			<h3>オススメリンク</h3>
			<ul>
				<li><a href=""> ﾃﾞｨｰｱｲﾜｰｸｽ株式会社</a></li>
				<li><a href="">XAMPPのダウンロード</a></li>
				<li><a href="">Eclipseのダウンロード</a></li>
				<li><a href="">Braketsのダウンロード</a></li>
			</ul>

			<h3>カテゴリ</h3>
			<ul>
				<li><a href=""> HTML</a></li>
				<li><a href=""> PHP</a></li>
				<li><a href=""> MySQL</a></li>
				<li><a href=""> JavaScript</a></li>
			</ul>

		</div>

	</div>
<!-- </main> -->

	<footer> Copyright D.I.works| D.I.blog is the one which
		provides A to Z about programming </footer>
</body>

</html>
