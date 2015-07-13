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

﻿<? get_header(); ?>
<nav class="navMeny">
    <div class="container">
        <?php wp_nav_menu( array('main-menu' => 'Меню в шапке','container'=> '',
            'items_wrap'=>'<ul>%3$s</ul>')); ?>
        <!--			<ul>-->
        <!--				<li><a href="#forKey" class="smoothScroll">Продукты под ключ</a></li>-->
        <!--				<li><a href="#nowhere" class="smoothScroll"> Недорогие решения</a></li>-->
        <!--				<li><a href="#serv" class="smoothScroll"> Услуги </a></li>-->
        <!--				<li><a href="#port" class="smoothScroll">Портфолио</a></li>-->
        <!--				<li><a href="#about" class="smoothScroll">О компании</a></li>-->
        <!--				<li><a href="#nowhere" class="smoothScroll">Контакты</a></li>-->
        <!--				<li><a href="#blogL" class="lastA smoothScroll">Блог</a></li>-->
        <!--			</ul>-->
    </div>
</nav>
<section class="sliderLine">
    <!-- -------------------ПРОБНЫЙ-------------------- -->

    <?php echo do_shortcode('[headSlides]')?>

    <!-- -------------------ПРОБНЫЙ-------------------- -->
</section>

<!--	<nav class="navMeny">-->
<!--		<div class="container">-->
<!--			<ul>-->
<!--				<li><a href="#forKey" class="smoothScroll">Продукты под ключ</a></li>-->
<!--				<li><a href="#nowhere" class="smoothScroll"> Недорогие решения</a></li>-->
<!--				<li><a href="#serv" class="smoothScroll"> Услуги </a></li>-->
<!--				<li><a href="#port" class="smoothScroll">Портфолио</a></li>-->
<!--				<li><a href="#about" class="smoothScroll">О компании</a></li>-->
<!--				<li><a href="#nowhere" class="smoothScroll">Контакты</a></li>-->
<!--				<li><a href="#blogL" class="smoothScroll">Блог</a></li>-->
<!--			</ul>-->
<!--		</div>-->
<!--	</nav>-->
<!--	<section class="sliderLine">-->
<!--		<div id="myCarousel" class="carousel slide" data-interval="500" data-ride="carousel">-->
<!--		    <!-- Индикаторы для карусели -->-->
<!--		    <ol class="carousel-indicators">-->
<!--				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>-->
<!--				<li data-target="#myCarousel" data-slide-to="1"></li>-->
<!--				<li data-target="#myCarousel" data-slide-to="2"></li>-->
<!--				<li data-target="#myCarousel" data-slide-to="3"></li>-->
<!--			</ol>-->
<!--		    <!-- Слайды карусели -->-->
<!--		    <div class="carousel-inner">-->
<!--		        <!-- Слайды создаются с помощью контейнера с классом item, внутри которого помещается содержимое слайда -->-->
<!--		        <div class="active item">-->
<!--		            <img src="--><?php //bloginfo('template_directory'); ?><!--/img/slide2.jpg" alt="Carousel Item Title">-->
<!--		            <div class="onSlideText">-->
<!--						<h1>Выполнение проектов под ключ</h1>-->
<!--			    		<p>С гарантией результата</p>-->
<!--			    		<a href="#">Узнать подробнее</a>-->
<!--			    	</div>-->
<!--		        </div>-->
<!--		        <!-- Слайд №2 -->-->
<!--		        <div class="item">-->
<!--		            <img src="--><?php //bloginfo('template_directory'); ?><!--/img/slide1.jpg" alt="Carousel Item Title">-->
<!--		            <div class="onSlideText">-->
<!--						<h1>Выполнение проектов под ключ</h1>-->
<!--			    		<p>С гарантией результата</p>-->
<!--			    		<a href="#">Узнать подробнее</a>-->
<!--			    	</div>-->
<!--		        </div>-->
<!--		        <!-- Слайд №3 -->-->
<!--		        <div class="item">-->
<!--		            <img src="--><?php //bloginfo('template_directory'); ?><!--/img/slide2.jpg" alt="Carousel Item Title">-->
<!--		            <div class="onSlideText">-->
<!--						<h1>Выполнение проектов под ключ</h1>-->
<!--			    		<p>С гарантией результата</p>-->
<!--			    		<a href="#">Узнать подробнее</a>-->
<!--			    	</div>-->
<!--		        </div>-->
<!--		        <!-- Слайд №4 -->-->
<!--		        <div class="item">-->
<!--		            <img src="--><?php //bloginfo('template_directory'); ?><!--/img/slide4.jpg" alt="Carousel Item Title">-->
<!--		            <div class="onSlideText">-->
<!--						<h1>Выполнение проектов под ключ</h1>-->
<!--			    		<p>С гарантией результата</p>-->
<!--			    		<a href="#">Узнать подробнее</a>-->
<!--			    	</div>-->
<!--		        </div>-->
<!--		    </div>-->
<!--		   -->
<!--		</div>-->
<!--		-->
<!-->>>>>>> origin/master-->
<!--	</section>-->

	<section class="products">
		<a id="forKey" name="forKey"></a>
		<div class="container">
			<h1 class="blockTitle">				
				Основные продукты
			</h1>
			<div class="row">
			<div class="productItems">
			<a href="#" class="singleProduct">
				<img height="203" src="<?php bloginfo('template_directory'); ?>/img/p1.png" alt="placeholder+image">
				<span class="productTrans">
					<h3>Сайт компании под ключ или интернет-магазин</h3>					
					<p>От вас идея- от нас результат в виде наполненного и продвинутого сайтас заявками.</p>
					<span class="productPrice">
					<b>от 60 000 Руб.</b><br>
					<small>Срок от 20 дней. </small>
					</span>
				</span>
			</a>
			<a href="#" class="singleProduct">
				<img src="<?php bloginfo('template_directory'); ?>/img/p2.png" alt="placeholder+image">
				<span class="productTrans">
					<h3>Клиенты из социальных сетей под ключ</h3>					
					<p>От вас информация о себе и задачи, от нас клиенты из социальных сетей.</p>
					<span class="productPrice">
					<b>от 10 000 Руб.</b><br>
					<small>Срок от 15 дней. </small>
					</span>
				</span>
			</a>
			<a href="#" class="singleProduct">
				<img src="<?php bloginfo('template_directory'); ?>/img/p3.png" alt="placeholder+image">
				<span class="productTrans">
					<h3>Повышение продаж существующих сайтов</h3>					
					<p>Все работы по сайту берем на себя. Превращаем затраты в инвестиции. </p>
					<span class="productPrice">
						<b>от 50 000 Руб.</b><br>
						<small>Срок от 20 дней. </small>
					</span>
				</span>
			</a>
			</div>
			</div>
			<div class="row">
				<a data-toggle="modal" href="#request" class="productConsult">Заказать консультацию</a>
			</div>			
		</div>
	</section>

	<section class="services">
		<a id="serv" name="serv"></a>
		<div class="container">
			<h1 class="blockTitle">Услуги</h1>
			<div class="serviceItem">
				<div class="row">
					<div class="col-lg-12">
						<div class="serviceBox">
							<img src="<?php bloginfo('template_directory'); ?>/img/serv1.png" alt="">
							<div class="servTrans">						
								<h3>Создание фирменного стиля</h3>
								<b>от 12 500 Руб.</b> <a data-toggle="modal" href="#request" class="servBuy">Заказать</a><br>
								<i>Срок от 20 дней.</i>
							</div>
						</div>
						<div class="serviceBox">
							<img src="<?php bloginfo('template_directory'); ?>/img/serv2.png" alt="">
							<div class="servTransTop">						
								<h3>Создание и оформление групп в соц. Сетях. </h3>
								<b>от 10 000 руб.</b> <a data-toggle="modal" href="#request" class="servBuy">Заказать</a><br>
								<i>Срок от 15 дней.</i>
							</div>
							<div class="servTrans">
								<h3>Продвижение групп.</h3>
								<b>от 10 000 Руб./мес.</b> <a data-toggle="modal" href="#request" class="servBuy">Заказать</a><br>
								<i>Срок от 15 дней.</i>
							</div>
						</div>
						<div class="serviceBox">
							<img src="<?php bloginfo('template_directory'); ?>/img/serv3.png" alt="">
							<div class="servTrans">						
								<h3>Проведение аудитов сайтов и контекстной рекламы для повышения конверсии</h3>
								<b>от 10 000 Руб.</b> <a data-toggle="modal" href="#request" class="servBuy">Заказать</a><br>
								<i>Срок от 10 дней.</i>
							</div>
						</div>
						<div class="serviceBox">
							<img src="<?php bloginfo('template_directory'); ?>/img/serv4.png" alt="">
							<div class="servTrans">						
								<h3>Проведение аудитов сайтов и контекстной рекламы для повышения конверсии</h3>
								<b>от 10 000 Руб.</b> <a data-toggle="modal" href="#request" class="servBuy">Заказать</a><br>
								<i>Срок от 10 дней.</i>
							</div>
						</div>
						<div class="serviceBox">
							<img src="<?php bloginfo('template_directory'); ?>/img/serv5.png" alt="">
							<div class="servTransTop">
								<a href="http://www.adres.ru" class="servLink">www.adres.ru</a>
								<h3>Продвижение сайтов</h3>
								<b>от 12 500 Р/мес.</b> <a href="#port" class="servPortfolio smoothScroll">Смотреть портфолио</a><br>
								
							</div>
							<div class="servTrans">
								<h3>Управление репутацией</h3>
								<b>от 7 000 Р/мес.</b> <a data-toggle="modal" href="#request" class="servBuy">Заказать</a>
							</div>
						</div>
						<div class="serviceBox">
							<img src="<?php bloginfo('template_directory'); ?>/img/serv6.png" alt="">
							<div class="servTrans">						
								<h3>Запуск и ведение контекстной рекламы и ретаргентинга</h3>
								<b>От 5 000 Руб./мес.</b> <a data-toggle="modal" href="#request" class="servBuy">Заказать</a><br>
							</div>
						</div>				
					</div>
				</div>
			</div>
			<div class="row">
				<a href="#nowhere" class="allServ">Показать все услуги</a>
			</div>
		</div>
	</section>
	<section class="jobs">
		<a id="port" name="port"></a>
		<div class="container">
			<h1 class="blockTitle">Примеры работ: </h1>
			<div class="row">
				<div class="jobsPad">
			<!-- --------------Выгруска работ-------------- -->
			<!--<a href="#nowhere" class="jobItem">
				<span class="jobImg">
					<img src="<?php /*bloginfo('template_directory'); */?>/img/siteEx1.png" alt="">
				</span>
				<p>Чистоffский</p>
			</a>
			<a href="#nowhere" class="jobItem">
				<span class="jobImg">
					<img src="<?php /*bloginfo('template_directory'); */?>/img/siteEx2.png" alt="">
				</span>
				<p>ЭРГОНОВА</p>
			</a>
			<a href="#nowhere" class="jobItem">
				<span class="jobImg">
					<img src="<?php /*bloginfo('template_directory'); */?>/img/siteEx3.png" alt="">
				</span>
				<p>Адвокат Саитов А.Т.</p>
			</a>
			<a href="#nowhere" class="jobItem">
				<span class="jobImg">
					<img src="<?php /*bloginfo('template_directory'); */?>/img/siteEx4.png" alt="">
				</span>
				<p>REMONT OTDELKA</p>
			</a>
			<a href="#nowhere" class="jobItem">
				<span class="jobImg">
					<img src="<?php /*bloginfo('template_directory'); */?>/img/siteEx5.png" alt="">
				</span>
				<p>stekoldi</p>
			</a>-->
                <?php echo do_shortcode("[work]");?>

			</div>
			<!-- --------------Выгруска работ-------------- -->
			</div>
			<div class="row">
				<a data-toggle="modal" href="#request" class="jobsPortfolio">Запросить портфолио</a>
			</div>
		</div>
	</section>
	<section class="figures">
		<a id="about" name="about"></a>
		<div class="container">
			<h1 class="blockTitle whiteText">Мы в цифрах:</h1>
			<div class="figuresBlock">
				<div class="figureImg">
					<img src="<?php bloginfo('template_directory'); ?>/img/figure1.png" alt="">
				</div>
				<h3>40 специалистов <br>в штате</h3>
			</div>
			<div class="figuresBlock">
				<div class="figureImg">
					<img src="<?php bloginfo('template_directory'); ?>/img/figure2.png" alt="">
				</div>
				<h3>3000 выполненных проектов</h3>
			</div>
			<div class="figuresBlock">
				<div class="figureImg">
					<img src="<?php bloginfo('template_directory'); ?>/img/figure3.png" alt="">
				</div>
				<h3>10 специалистов работает над одним проектом</h3>
			</div>
			<div class="figuresBlock">
				<div class="figureImg">
					<img src="<?php bloginfo('template_directory'); ?>/img/figure4.png" alt="">
				</div>
				<h3>5 лет на рынке</h3>
			</div>
			<div class="figuresBlock">
				<div class="figureImg">
					<img src="<?php bloginfo('template_directory'); ?>/img/figures5.png" alt="">
				</div>
				<h3>4 года средний опыт специалиста в отрасли</h3>
			</div>
		</div>
	</section>
	<section class="oneTeam">
		<div class="container">
			<div class="oneTeamBlock">
				<h1 class="blockTitle">Одна из команд проекта:</h1>
				<div class="row">
					<div class="allTeam">
					<div class="row">
						<div class="teamLine">
							<div class="teamMember">
								<img src="<?php bloginfo('template_directory'); ?>/img/l11.png" alt="placeholder+image">
								<h3>Елизавета</h3>
								<p>Директолог</p>
							</div>

							<div class="teamMember">
								<img src="<?php bloginfo('template_directory'); ?>/img/l12.png" alt="placeholder+image">
								<h3>Константин</h3>
								<p>Технический менеджер</p>
							</div>

							<div class="teamMember">
								<img src="<?php bloginfo('template_directory'); ?>/img/l13.png" alt="placeholder+image">
								<h3>Виталий</h3>
								<p>Маркетолог</p>
							</div>

							<div class="teamMember">
								<img src="<?php bloginfo('template_directory'); ?>/img/l14.png" alt="placeholder+image">
								<h3>Алина</h3>
								<p>Дизайнер</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="teamLine  temLine2">
							<div class="teamMember">
								<img src="<?php bloginfo('template_directory'); ?>/img/l21-1.png" alt="placeholder+image">
								<h3>Олег</h3>
								<p>Верстальщик</p>
							</div>
							<div class="teamMember">
								<img src="<?php bloginfo('template_directory'); ?>/img/l22.png" alt="placeholder+image">
								<h3>Алексей</h3>
								<p>Веб-мастер</p>
							</div>

							<div class="teamMember">
								<img src="<?php bloginfo('template_directory'); ?>/img/l23.png" alt="placeholder+image">
								<h3>Аркадий</h3>
								<p>Программист</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="teamLine">
							<div class="teamMember">
								<img src="<?php bloginfo('template_directory'); ?>/img/l31.png" alt="placeholder+image">
								<h3>Михаил</h3>
								<p>Специалист по подбору семантики</p>
							</div>
						

							<div class="teamMember">
								<img src="<?php bloginfo('template_directory'); ?>/img/l32.png" alt="placeholder+image">
								<h3>Юлия</h3>
								<p>Корректор-копирайтер</p>
							</div>

							<div class="teamMember">
								<img src="<?php bloginfo('template_directory'); ?>/img/l33.png" alt="placeholder+image">
								<h3>Антон</h3>
								<p>Аналитик</p>
							</div>

							<div class="teamMember">
								<img src="<?php bloginfo('template_directory'); ?>/img/l34.png" alt="placeholder+image">
								<h3>Андрей</h3>
								<p>SEO-специалист</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="teamLine">
							<div class="teamMember">
								<img src="<?php bloginfo('template_directory'); ?>/img/teamLine4.png" alt="placeholder+image">
								<h3>Екатерина</h3>
								<p>Аккаунт менеджер</p>
							</div>
						</div>
					</div>	
					</div>				
				</div>
				<div class="row">
					<a data-toggle="modal" href="#request" class="jobsPortfolio">Запросить портфолио</a>
				</div>
			</div>
		</div>
	</section>

    <?php echo do_shortcode("[reviews]");?>
    <?php echo do_shortcode("[news]");?>
    <?php echo do_shortcode("[blog]");?>

<? get_footer(); ?>
