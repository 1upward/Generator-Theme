<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="icon" href="/wp-content/uploads/2015/03/657068.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="/wp-content/uploads/2015/03/657068.ico" type="image/x-icon" />
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaOWKyamSxMTXclSDFmJ2N4Am20PCTD6I&sensor=FALSE">
    </script>
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>
<header>
		<div class="topLine">
			<div class="container">
				<div class="topLine-left">				
					<p>Наши проекты:</p>
					<a href="http://promo.itpanda.ru">promo.itpanda.ru</a>
					<a href="http://shop.itpanda.ru">shop.itpanda.ru</a>
				</div>
				<div class="topLine-right">
					<ul>
						<li><a href="#nowhere">Новости</a></li>
						<li><a href="#nowhere">Вакансии</a></li>
						<li><a href="#nowhere">Генератор продаж</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="header">			
				<a href="<?php echo get_home_url(); ?>" class="logo"><span>
					Генератор
				</span></a>
				<div class="slogan">
					Решаем все задачи по созданию <br> и развитию сайтов в <!-- Екатеринбурге -->  
					<div class="btn-group">
						<select name="city" id="myselect">
+							<option id="ecater" value="+7 (343) 226-01-36" selected>Екатеринбурге </option>
+							<option id="chel" value="+7 (351) 216-03-24">Челябинск</option>
+							<option id="mosc" value="+7 (499) 704-62-76">Москва </option>
+							<option id="tyumen" value="+7 (3452) 23-83-14">Тюмень </option>
+							<option id="allRus" value="&nbsp 8 (800) 333-69-90">Вся Россия </option>							
 							<span class="caret"></span>
 						</select>
 					</div>
				</div>
				<div class="headerPhone">
					+7 (343) 226-01-36
				</div>
				<div class="headerButton">
					<a data-toggle="modal" href="#request">Оставить заявку</a>
				</div>
			</div>
		</div>		
	</header>