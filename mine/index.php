<!DOCTYPE html>
<hmtl lang="ja">
<head>
	<title>マインスイーパー</title>
	<meta charset="utf-8">
	
	<link rel="stylesheet" media="screen" type="text/css" href="css/styles.css" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,600,700' rel='stylesheet' type='text/css'>

	<?php
		$id=$_COOKIE['id'];
		$dsp="";
		if($id){
			$dsp="アカウントの切り替え";
		}else{
			$dsp="ログイン";
		}
		$src="var username=\"".$id."\"";
	?>

	<script>
		<?=$src?>
 	</script>
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	
	<script type="text/javascript" src="js/mine.js"></script>
	
</head>

<body>
	<div class="container">
		<header class="row">
			<div class="sixcol">
			<h1>マインスイーパーのような何か</h1>
			</div>
			<div class="sixcol last">
				<h4><?=$id?></h4><p><a href="../login?url=mine%2Findex.php"><?=$dsp?></a></p>
			</div>
		</header>
		<section class="row">
			<div class="eightcol">
				
				<canvas id="board" width="600" height="400" oncontextmenu="return false;">
					<p>お使いのブラウザはCanvas要素をサポートしていないようです</p>
				</canvas>
				
				<noscript>
					<p>JavaScriptがオフになっているか、使用できません</p>
				</noscript>
			</div>
			<div class="fourcol last">
				<div class="startscreen">
					<h1>はじめる</h1>
					<p>むずかしさを、えらんでね！（小並）</p>
					<button id="ueasybtn">すごくかんたん</button>
					<button id="easybtn">かんたん</button>
					<button id="mediumbtn">ふつう</button>
					<button id="insanebtn">むずかしい</button>
					<button id="ultrabtn">オニ</button>
				
					
					<h1>スコアボード</h1>
					<table id="scoreboard">
						<tr>
							<th>名前</th>
							<th>除去した個数</th>
							<th>時間</th>
						</tr>
					</table>
					
				</div>
				
				<div class="gamescreen">
					<h1 id="status">開始！</h1>
					<p id="msg">四角をクリックしてつぶしてください</p>
					<button id="reset">リセット</button>
					<button id="switchscreens">難易度を変更する</button>
					<br>
                    <p><input type="checkbox" id="flagchk" value="1">フラグ設置モード</p>
					<br>
					<p><span id="time">0</span> 秒経過</p>
					<span id="mines"></span><br/>
					<span id="flags"></span><br/>
					<span id="detail"></span>
				</div>
			</div>
		</section>
		<footer class="row">
			<div class="threecol">
				<a href="http://www.w3.org/html/logo/">
<img src="http://www.w3.org/html/logo/badge/html5-badge-h-css3-graphics-semantics-storage.png" width="229" height="64" alt="HTML5 Powered with CSS3 / Styling, Graphics, 3D &amp; Effects, Semantics, and Offline &amp; Storage" title="HTML5 Powered with CSS3 / Styling, Graphics, 3D &amp; Effects, Semantics, and Offline &amp; Storage">
</a>
			</div>
			<div class="fourcol">
			<p>このページはHTML5の技術を用いて制作されています。HTML5？って人はggrks</p>
			</div>
			<div class="fivecol last">
				<p class="desc">
					時は現代...京都工学院高校にばれないように画像を見ようとする一人の青年が...ってこの設定いります？
				</p>
			</div>
		</footer>
	</div>
</body>
</html>
