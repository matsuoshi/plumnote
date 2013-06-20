<?php
include 'articles.php';
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>plumnote</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width">
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/main.css" charset="utf-8"/>
</head>
<body>

<header>
	<h1><a href="/">Plumnote</a></h1>
	<div id="description">詳細description がここに入ります。</div>
	
	<nav>
		<ul>
			<li><a href="/">Home</a></li>
			<li><a href="/about">About</a></li>
			<li><a href="/archives">Archive</a></li>
			<li><a href="/rss">RSS</a></li>
		</ul>
	</nav>
</header>

<hr />

<div id="main">
	<?php foreach ($articles as $article) : ?>
	<article>
		<h2><a href="#">タイトルです</a></h2>
		<?php echo $article['body']; ?>
	</article>
	<hr />
	<?php endforeach; ?>
</div>

<aside id="sidebar">
	<section>
		<h3>検索</h3>
		//最近の投稿
		//タグ
		//フリーテキスト
		//カレンダー
		//年月
		//シンタックス
		//ad
	</section>
	<section>
		<h3>最近の投稿</h3>
		//タグ
		//フリーテキスト
		//カレンダー
		//年月
		//シンタックス
		//ad
	</section>
</aside>

<footer>
plumnote theme
</footer>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
</body>
</html>
