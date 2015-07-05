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
				<div class="logo">
					Генератор
				</div>
				<div class="slogan">
					Решаем все задачи по созданию <br> и развитию сайтов в <!-- Екатеринбурге -->  
					<div class="btn-group">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Екатеринбурге 
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu">
							<li><a href="#">Челябинск</a></li>
							<li><a href="#">Москва</a></li>
							<li><a href="#">Тюмень</a></li>
							<li><a href="#">Вся Россия</a></li>
						</ul>
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
	<nav class="navMeny">
		<div class="container">
			<ul>
				<li><a href="#forKey" class="smoothScroll">Продукты под ключ</a></li>
				<li><a href="#nowhere" class="smoothScroll"> Недорогие решения</a></li>
				<li><a href="#serv" class="smoothScroll"> Услуги </a></li>
				<li><a href="#port" class="smoothScroll">Портфолио</a></li>
				<li><a href="#about" class="smoothScroll">О компании</a></li>
				<li><a href="#nowhere" class="smoothScroll">Контакты</a></li>
				<li><a href="#blogL" class="lastA smoothScroll">Блог</a></li>
			</ul>
		</div>
	
	<section class="sliderLine">
		
		<!-- -------------------ПРОБНЫЙ-------------------- -->
		 <div id="myCarousel" class="carousel slide" data-interval="500" data-ride="carousel">
                <!-- Индикаторы для карусели -->
                <ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
				</ol>
                <!-- Слайды карусели -->
                <div class="carousel-inner">
                    <!-- Слайды создаются с помощью контейнера с классом item, внутри которого помещается содержимое слайда -->
                    <div class="active item">
                        <img src="<?php bloginfo('template_directory'); ?>/img/slide2.jpg" alt="Carousel Item Title">
                        <div class="onSlideText">
							<h1>Выполнение проектов под ключ</h1>
				    		<p>С гарантией результата</p>
				    		<a href="#">Узнать подробнее</a>
				    	</div>
                    </div>
                    <!-- Слайд №2 -->
                    <div class="item">
                        <img src="<?php bloginfo('template_directory'); ?>/img/slide1.jpg" alt="Carousel Item Title">
                        <div class="onSlideText">
							<h1>Выполнение проектов под ключ</h1>
				    		<p>С гарантией результата</p>
				    		<a href="#">Узнать подробнее</a>
				    	</div>
                    </div>
                    <!-- Слайд №3 -->
                    <div class="item">
                        <img src="<?php bloginfo('template_directory'); ?>/img/slide2.jpg" alt="Carousel Item Title">
                        <div class="onSlideText">
							<h1>Выполнение проектов под ключ</h1>
				    		<p>С гарантией результата</p>
				    		<a href="#">Узнать подробнее</a>
				    	</div>
                    </div>
                    <!-- Слайд №4 -->
                    <div class="item">
                        <img src="<?php bloginfo('template_directory'); ?>/img/slide4.jpg" alt="Carousel Item Title">
                        <div class="onSlideText">
							<h1>Выполнение проектов под ключ</h1>
				    		<p>С гарантией результата</p>
				    		<a href="#">Узнать подробнее</a>
				    	</div>
                    </div>
                </div>
               
            </div>
		<!-- -------------------ПРОБНЫЙ-------------------- -->
	</section>

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
					<h3>Сайт компании под ключ или интернет-магазин</h3>					
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
					<h3>Сайт компании под ключ или интернет-магазин</h3>					
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
				<h3>40 специалистов в штате</h3>
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
				<div class="row">
					<a data-toggle="modal" href="#request" class="jobsPortfolio">Запросить портфолио</a>
				</div>
			</div>
		</div>
	</section>

    <?php echo do_shortcode("[reviews]");?>
    <?php echo do_shortcode("[news]");?>
    <?php echo do_shortcode("[blog]");?>
   	<footer>
   		<div class="topLine">
			
				<div class="topLine-left">				
					<p>Наши проекты:</p>
					<a href="http://promo.itpanda.ru">promo.itpanda.ru</a>
					<a href="http://shop.itpanda.ru">shop.itpanda.ru</a>
				</div>
				<div class="topLine-right">
					<ul>
						<li><a href="#">Новости</a></li>
						<li><a href="#">Вакансии</a></li>
						<li><a href="#">Генератор продаж</a></li>
					</ul>
				</div>
			
		</div>
		<div class="footerContent">
			<div class="footContacts">
				<h3>© «IT PANDA», 2012-2015</h3>
				<p>Екатеринбург	+7 (343) 226-01-36</p>
				<p>Челябинск	+7 (351) 216-03-24</p>
				<p>Москва	+7 (499) 704-62-76</p>
				<p>Тюмень	+7 (3452) 23-83-14</p>
				<p>Вся Россия	8 (800) 333-6990</p>
				<a href="#nowhere">Карта проезда</a><a href="mailto=sales@itpanda.ru">sales@itpanda.ru</a>
			</div>
			<div class="footSlogan">
				<h3>Создание продающих сайтов в Екатеринбурге и по России</h3>
				<h3>Продвижение сайтов в IT PANDA - itpanda-promo.ru</h3>
				<div class="footSloganBut">
					<a data-toggle="modal" href="#request">Запросить портфолио</a>
					<p>Мы обязательно ответим</p>
				</div>
			</div>
			<div class="footSoc">
				<h3>Мы в соц.сетях</h3>
				<ul class="footSocList">
					<li><a href="#"><i class="t"></i></a></li>
					<li><a href="#"><i class="fb"></i></a></li>		            
		            <li><a href="#"><i class="vk"></i></a></li>		            
        		</ul>
			</div>
		</div>
   	</footer>

   	<div class="modal fade" id="request" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-header">
	            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><!--&times;--></button>
	            <h1>Запросить коммерческое предложение</h1>            
	            <p>При заказе сайта до 14 июня 3000 рублей 
	            	в подарок на дополнительный функционал! До конца акции осталось:</p>
	            <?php echo do_shortcode("[contact-form-7 id='135' title='GeneratorRequest']"); ?>
	        </div>       
	    </div>
	</div>
<?php wp_footer(); ?>
</body>
</html>