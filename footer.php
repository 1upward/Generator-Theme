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