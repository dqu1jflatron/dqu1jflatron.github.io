<DOCTYPE !html>
	<html>
	<head>
		<title>FlatronPlay</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width-device-width, initial-scale-1">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/media.css">
		<link rel="stylesheet" type="text/css" href="css/menu.css">
		<link rel="apple-touch-icon" sizes="180x180" href="icon/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="icon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="icon/favicon-16x16.png">
		<link rel="manifest" href="icon/site.webmanifest">
		<link rel="mask-icon" href="icon/safari-pinned-tab.svg" color="#cd1111">
		<meta name="msapplication-TileColor" content="#ff0000">
		<meta name="theme-color" content="#ffffff">
		<script src="https://vk.com/js/api/openapi.js?160" type="text/javascript"></script>
		<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   		<script src="js/menu.js"></script>
	</head>
	<body>
		<div class="wrapper">
		<h1 align=center>FlatronPlay</h1>
		<ul align=center class="pc-menu-ul">
			<a href="index.php"><li id="pc-menu">Главная</li></a>
			<a href="news.php"><li class="active" id="pc-menu">Новости</li></a>
			<a href="info.php"><li id="pc-menu">Информация</li></a>
			<a href="url.php"><li id="pc-menu">Ссылки</li></a>
		</ul>
		<div class="content">
			<div id='cssmenu'>
<ul>
   <li class='active has-sub'><a href='#'><span>Меню</span></a>
      <ul>
         <li class='last'><a href='index.php'><span>Главная</span></a>
         </li>
         <li class='last'><a href='news.php'><span>Новости</span></a>
         </li>
         <li class='last'><a href='info.php'><span>Информация</span></a>
         </li>
         <li class='last'><a href='url.php'><span>Ссылки</span></a>
         </li>
      </ul>
   </li>
</ul>
</div>
        <h2>Новости</h2>
		<div id="news_vk" align=center><script type="text/javascript" src="https://vk.com/js/api/openapi.js?160"></script>

<!-- VK Widget -->
<div id="vk_groups"></div>
<script type="text/javascript">
VK.Widgets.Group("vk_groups", {mode: 4, wide: 1, height: "400"}, 127153142);
</script></div>
		<h2>Архив</h2>
		<div id="archive">
		<p>Все самые важные и старые новости прямо здесь.</p>
		<p><strong>26 октября 2014</strong> Создание канала</p>
		<p><strong>11 ноября 2016</strong> Первое видео</p>
		<p><strong>13 мая 2017</strong> Первый стрим</p>
		<p><strong>1 марта 2019 - 28 апреля 2019</strong> Стримов не было по причине неуплаты за интернет</p>
		</div>
	</div></div>
	<div class="vk_support">
		<script type="text/javascript" src="https://vk.com/js/api/openapi.js?160"></script>

		<!-- VK Widget -->
		<div id="vk_community_messages"></div>
		<script type="text/javascript">
		VK.Widgets.CommunityMessages("vk_community_messages", 127153142, {tooltipButtonText: "Есть вопрос?"});
		</script>
    </div>
	</body>
	</html>