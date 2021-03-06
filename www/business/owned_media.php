<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0" />
<title>【オウンドメディア】WEBサイトの制作ならMasterwood｜マスターウッド</title>
<meta name="description" content="WEB運用をどうしたらいいかわからない人へ、WEB運用の方法をコーチングします。メンターとしての利用もできるし、コンサルティングも受けられる！「Masterwood」のWEB制作のコーチング・コンサルティングサービスをご紹介。マスターウッド"/>

<link href="../css/reset.css" media="all" rel="stylesheet" type="text/css"/>
<link href="../css/main.css" media="all" rel="stylesheet" type="text/css"/>
<link href="../css/second.css" media="all" rel="stylesheet" type="text/css"/>
<link rel="shortcut icon" href="../img/favicon.ico">
<?php include($_SERVER['DOCUMENT_ROOT'].'/layout/analyticstracking.php'); ?>
</head>
<body>
<header>
	<div class="log"><a href="/"><img src="../img/logo.jpg"></a></div>
</header>
<!-- グローバルナビ -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/global_menu/global_menu.php'); ?>
<!-- END グローバルナビ -->
<section>
<div class="container">
	<h1 class="mainhedding">【オウンドメディア】WEBサイトの制作ならMasterwood</h1>
	<div class="txt_C">
		<img src="../img/second/business/ownmedia2.jpg" alt="オウンドメディアの制作">
	</div>
	<h2 class="mb_30 font_B">オウンドメディアの制作代行</h2>
    <p class="clear_B">Masterwoodでは、オウンドメディアの制作を代行しています。企業や事業のアピールには、自社サイトだけではなく、オウンドメディアを持って簡単に情報を発信していくスタイルが増えています。オウンドメディアの長所はCMSで作られたWEBメディアなので、更新する際もブログ感覚でできる点です。しかし、このCMSはWordPressを使用するのが主流ですが、このWordPressは、サーバーにダウンロードしなければいけませんし、デザインとなるテーマも初期からある無料のテーマをそのまま使用するのでは望むデザインにはなりませんので、編集する必要があります。CMSはコンテンツをブログ感覚で上げていくにはとても簡単で便利ですが、最初の設定やデザインの編集は、専門家に任せるのが一番です。HYPERAMBITIONでは、低価格でコンテンツを発信していくオウンドメディアを制作いたします。</p>
	<h2 class="mt_50 mb_30 font_B">コンテンツの記事のライティングも行います。</h2>
		<p class="">オウンドメディアを所有するだけで、中身であるコンテンツが何もないと意味がありません。しかし、コンテンツの制作は、画像を選定したり、情報を調べ上げて記事を書いたりと、負担になる作業です。HYPERAMBITIONでは、コンテンツの制作代行も行いますので、WEBマーケティングをお任せしていただけます。</p>
		<h2 class="fl mt_50 mb_30 font_B">WEB制作・運用のレクチャー（コーチング）</h2>
				<div class="lineup clear_B">
        <div class="lineup-list">
            <a href="website-create.php"><img src="../img/second/business/imadesyo2.jpg" alt="WEB制作">
            <p>WEB制作</p>
            </a>
        </div>
        <div class="lineup-list">
            <a href="website-run.php">
            <img src="../img/second/business/up2.jpg" alt="WEB運用">
            <p>WEB運用</p>
            </a>
        </div>
    </div>
    <h2 class="fl mt_50 mb_30 font_B">WEBサイトの制作</h2>
    <div class="lineup clear_B">
        <div class="lineup-list">
            <a href="lp-create.php">
            <img src="../img/second/business/sales2.jpg" alt="LP制作">
            <p>ランディングページ（LP）制作</p>
            </a>
        </div>
        <div class="lineup-list">
            <a href="website-agent-create.php">
            <img src="../img/second/business/cording2.jpg" alt="WEB制作">
            <p>WEB制作</p>
            </a>
        </div>
        <div class="lineup-list">
            <a href="owned_media.php">
            <img src="../img/second/business/ownmedia2.jpg" alt="オウンドメディア">
            <p>オウンドメディア</p>
            </a>
        </div>
    </div>
    <h2 class="fl mt_50 mb_30 font_B">WEB運用・集客のコンサルティング</h2>
    <div class="lineup clear_B">
        <div class="lineup-list">
            <a href="seo_policy.php"><img src="../img/second/business/seo.jpg" alt="SEO施策">
            <p>SEO施策</p>
            </a>
        </div>
        <div class="lineup-list">
            <a href="">
            <img src="../img/second/business/money.jpg" alt="集客">
            <p>集客</p>
            </a>
        </div>
    </div>
    <p class="txt_C mt_30 clear_B">一台のパソコンから、世界まで</p>
    <h3 class="h1size">Masterwoodで、WEBを</h3>
</div>
<!--　フッターエリア
---------------------------------->
<footer>
  <?php include($_SERVER['DOCUMENT_ROOT'].'/footer/footer.php'); ?>
</footer>
<!-- END フッターエリア
---------------------------------->
</section>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
	//グローバルナビ
	$(function(){
	var menuBtn =$("#global"),
		menuContent = $("#nav");
	menuBtn.click(function(){
		menuContent.slideToggle();
	});
	$(window).resize(function(){
		var win = $(window).width(),
			p = 960;
		if(win >p){
			menuContent.show();
		}else{
			menuContent.hide();
		}
	});
	$("#nav > li").click(function(e){
		$(this).children('ul').slideToggle('fast').parent().siblings().children("ul:visible").hide('fast');
	});
});

</script>
</body>
</html>
