<?php require_once("res/x5engine.php"); ?>
<!DOCTYPE html><!-- HTML5 -->
<html prefix="og: http://ogp.me/ns#" lang="ru" dir="ltr">
	<head>
		<title>Поиск</title>
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv="ImageToolbar" content="False" /><![endif]-->
		<meta name="author" content="NAIL-GURU.COM" />
		<meta property="og:locale" content="ru" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="https://vannalux.github.io/nail-guru/imsearch.php" />
		<meta property="og:title" content="Поиск" />
		<meta property="og:site_name" content="Маникюр и педикюр в Одессе" />
		<meta property="og:image" content="https://vannalux.github.io/nail-guru/favImage.png" />
		<meta property="og:image:type" content="image/png">
		<meta property="og:image:width" content="800">
		<meta property="og:image:height" content="800">
		<meta name="twitter:card" content="summary_large_image">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
		<link rel="stylesheet" href="style/reset.css?2025-1-7-0" media="screen,print" />
		<link rel="stylesheet" href="style/print.css?2025-1-7-0" media="print" />
		<link rel="stylesheet" href="style/style.css?2025-1-7-0" media="screen,print" />
		<link rel="stylesheet" href="style/template.css?2025-1-7-0" media="screen" />
		<link rel="stylesheet" href="pcss/imsearch.css?2025-1-7-0-638960070018827077" media="screen,print" />
		<script src="res/jquery.js?2025-1-7-0"></script>
		<script src="res/x5engine.js?2025-1-7-0" data-files-version="2025-1-7-0"></script>
		<script>
			window.onload = function(){ checkBrowserCompatibility('Ваш браузер не поддерживает функции, требуемые для визуализации этого Сайта.','Возможно, Ваш браузер не поддерживает функции, требуемые для визуализации этого Сайта.','[1]Обновите Ваш браузер[/1] или [2]продолжите процедуру [/2].','http://outdatedbrowser.com/'); };
			x5engine.utils.currentPagePath = 'imsearch.php';
			x5engine.boot.push(function () { x5engine.imPageToTop.initializeButton({}); });
		</script>
		<link rel="icon" href="favicon.ico?2025-1-7-0-638960070018827077" type="image/vnd.microsoft.icon" />
		<style>
				h1, h2, h3, h4, h5, h6 {
				    font-weight: normal;
				}
		
		{ scrollbar-color:rgba(19,79,92,1.00) rgba(241,241,241,1.00); }
		::-webkit-scrollbar { width:16px; }
		::-webkit-scrollbar-track { background:rgba(241,241,241,1.00); }
		::-webkit-scrollbar-thumb { background-color:rgba(19,79,92,1.00); border-radius:0px; border:1px solid rgba(245,245,245,1.00); }
		::-webkit-scrollbar-corner { background:rgba(241,241,241,1.00); }
		::-webkit-scrollbar-thumb:hover { background-color:rgba(14,67,87,1.00); }
		</style>
		<script src="https://kit.fontawesome.com/f737751420.js" crossorigin="anonymous"></script>
	</head>
	<body>
		<div id="imPageExtContainer">
			<div id="imPageIntContainer">
				<a class="screen-reader-only-even-focused" href="#imGoToCont" title="Заголовок главного меню">Перейти к контенту</a>
				<div id="imHeaderBg"></div>
				<div id="imPage">
					<header id="imHeader">
						
						<div id="imHeaderObjects"><div id="imHeader_imObjectTitle_03_wrapper" class="template-object-wrapper"><div id="imHeader_imObjectTitle_03"><span id ="imHeader_imObjectTitle_03_text" ><a href="index.html" onclick="return x5engine.utils.location('index.html', null, false)">NAIL GURU</a></span></div></div><div id="imHeader_imMenuObject_01_wrapper" class="template-object-wrapper"><!-- UNSEARCHABLE --><a id="imHeader_imMenuObject_01_skip_menu" href="#imHeader_imMenuObject_01_after_menu" class="screen-reader-only-even-focused">Пропустить меню</a><div id="imHeader_imMenuObject_01"><nav id="imHeader_imMenuObject_01_container"><button type="button" class="clear-button-style hamburger-button hamburger-component" aria-label="Показать меню"><span class="hamburger-bar"></span><span class="hamburger-bar"></span><span class="hamburger-bar"></span></button><div class="hamburger-menu-background-container hamburger-component">
	<div class="hamburger-menu-background menu-mobile menu-mobile-animated hidden">
		<button type="button" class="clear-button-style hamburger-menu-close-button" aria-label="Закрыть"><span aria-hidden="true">&times;</span></button>
	</div>
</div>
<ul class="menu-mobile-animated hidden">
	<li class="imMnMnFirst imPage" data-link-paths=",/nail-guru/index.html,/nail-guru/">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="index.html">
Главная		</a>
</div>
</div>
	</li><li class="imMnMnMiddle imPage" data-link-paths=",/nail-guru/price.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="price.html">
Прайс		</a>
</div>
</div>
	</li><li class="imMnMnLast imPage" data-link-paths=",/nail-guru/foto.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="foto.html">
Фото		</a>
</div>
</div>
	</li></ul></nav></div><a id="imHeader_imMenuObject_01_after_menu" class="screen-reader-only-even-focused"></a><!-- UNSEARCHABLE END --><script>
var imHeader_imMenuObject_01_settings = {
	'menuId': 'imHeader_imMenuObject_01',
	'responsiveMenuEffect': 'slide',
	'responsiveMenuLevelOpenEvent': 'mouseover',
	'animationDuration': 600,
}
x5engine.boot.push(function(){x5engine.initMenu(imHeader_imMenuObject_01_settings)});
$(function () {
    $('#imHeader_imMenuObject_01_container ul li').not('.imMnMnSeparator').each(function () {
        $(this).on('mouseenter', function (evt) {
            if (!evt.originalEvent) {
                evt.stopImmediatePropagation();
                evt.preventDefault();
                return;
            }
        });
    });
});
$(function () {$('#imHeader_imMenuObject_01_container ul li').not('.imMnMnSeparator').each(function () {    var $this = $(this), timeout = 0;    $this.on('mouseenter', function () {        clearTimeout(timeout);        setTimeout(function () { $this.children('ul, .multiple-column').stop(false, false).show(); }, 250);    }).on('mouseleave', function () {        timeout = setTimeout(function () { $this.children('ul, .multiple-column').stop(false, false).hide(); }, 250);    });});});

</script>
</div><div id="imHeader_imObjectTitle_05_wrapper" class="template-object-wrapper"><div id="imHeader_imObjectTitle_05"><span id ="imHeader_imObjectTitle_05_text" ><a role="button" href="tel:+380661861072">(066) 186-10-72  Vodafone</a></span></div></div></div>
					</header>
					<div id="imStickyBarContainer">
						<div id="imStickyBarGraphics"></div>
						<div id="imStickyBar">
							<div id="imStickyBarObjects"><div id="imStickyBar_imTextObject_05_wrapper" class="template-object-wrapper"><div id="imStickyBar_imTextObject_05">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="imStickyBar_imTextObject_05_tab0" style="opacity: 1; " role="tabpanel" tabindex="0">
		<div class="text-inner">
			<div class="imTACenter"><i><span class="fs16lh1-5 ff1"><a role="button" href="tel:+380661861072" class="imCssLink"><b><span class="cf1">(066) 186-10-72 &nbsp;Vodafone</span></b></a></span><span class="fs16lh1-5 cf2 ff1"> &nbsp;Пн-Пт с 9:00-19:00 &nbsp;</span></i><span class="imTALeft fs20lh1-5"><a role="button" href="viber://chat?number=+380661861072" class="imCssLink"><i class="fa-brands fa-viber" style="color: #754e9f;"></i></a></span></div>
		</div>
	</div>

</div>
</div><div id="imStickyBar_imTextObject_06_wrapper" class="template-object-wrapper"><div id="imStickyBar_imTextObject_06">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="imStickyBar_imTextObject_06_tab0" style="opacity: 1; " role="tabpanel" tabindex="0">
		<div class="text-inner">
			<div class="imTACenter"><span class="fs16lh1-5 ff1"><b><span class="cf1"><i><span><a role="button" href="tel:+380661861072" class="imCssLink"><span class="cf1">tel: (066) 186-10-72 &nbsp;Vodafone</span></a></span> &nbsp;&nbsp;</i></span></b></span><span class="imTALeft fs20lh1-5"><a role="button" href="viber://chat?number=+380661861072" class="imCssLink"><i class="fa-brands fa-viber" style="color: #754e9f;"></i></a></span></div>
		</div>
	</div>

</div>
</div></div>
						</div>
					</div>
					<div id="imSideBar">
						<div id="imSideBarObjects"><div id="imSideBar_imObjectImage_01_wrapper" class="template-object-wrapper"><div id="imSideBar_imObjectImage_01"><div id="imSideBar_imObjectImage_01_container"><img src="images/empty-GT_imagea-1-.webp" alt="" width="140" height="140" />
</div></div></div></div>
					</div>
					<div id="imContentGraphics"></div>
					<main id="imContent">
						<a id="imGoToCont"></a>
						<div id="imSearchPage">
						<h1 id="imPgTitle">Результаты поиска</h1>
						<?php
						$search = new imSearch();
						$keys = isset($_GET['search']) ? @htmlspecialchars($_GET['search'], ENT_COMPAT) : "";
						$page = isset($_GET['page']) ? @htmlspecialchars($_GET['page']) : 0;
						$type = isset($_GET['type']) ? @htmlspecialchars($_GET['type']) : "pages"; ?>
						<div class="searchPageContainer">
						<?php echo $search->search($keys, $page, $type); ?>
						</div>
						</div>
						
					</main>
					<div id="imFooterBg"></div>
					<footer id="imFooter">
						<div id="imFooterObjects"><div id="imFooter_imTextObject_02_wrapper" class="template-object-wrapper"><div id="imFooter_imTextObject_02">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="imFooter_imTextObject_02_tab0" style="opacity: 1; " role="tabpanel" tabindex="0">
		<div class="text-inner">
			<div class="imTACenter"><i><span class="fs16lh1-5 ff1"><a role="button" href="tel:+380661861072" class="imCssLink"><b><span class="cf1">(066) 186-10-72 &nbsp;Vodafone</span></b></a></span><span class="fs16lh1-5 cf2 ff1"> Пн-Пт с 9:00-19:00</span></i></div><div class="imTACenter"><div><span class="fs28lh1-5 cf2"><a role="button" href="viber://chat?number=+380661861072" class="imCssLink"><i class="fa-brands fa-viber"></i></a> <a role="button" href="https://telegram.me/mi" class="imCssLink"><i class="fa-brands fa-telegram"></i></a> <a role="button" href="https://m.me/mi" class="imCssLink"><i class="fa-brands fa-facebook"></i></a> <a href="#" class="imCssLink"><i class="fa-brands fa-instagram"></i></a></span></div></div><div class="imTACenter"><i class="fs10lh1-5"><span class="cf2">© </span><a href="index.html" class="imCssLink" onclick="return x5engine.utils.location('index.html', null, false)"><span class="cf2">NAILGURU.PP.UA</span></a><span class="cf2"> Украина 2015-<script type="text/javascript">document.write(new Date().getFullYear());</script></span></i></div>
		</div>
	</div>

</div>
</div></div>
					</footer>
				</div>
				<span class="screen-reader-only-even-focused" style="bottom: 0;"><a href="#imGoToCont" title="Прочесть эту страницу заново">Назад к содержимому</a></span>
			</div>
		</div>
		
		<noscript class="imNoScript"><div class="alert alert-red">Для использования этого сайта необходимо включить JavaScript.</div></noscript>
	</body>
</html>
