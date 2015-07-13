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
<div class="container">
    <div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">

            <?php /* The loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'content', get_post_format() );?>
               
            <?php endwhile; ?>

        </div><!-- #content -->
    </div><!-- #primary -->
</div>
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