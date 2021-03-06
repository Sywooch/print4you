<?php

/* @var $this yii\web\View */

use frontend\components\ReviewsWidget;
use yii\helpers\Url;
use yii\helpers\Html;

?>
<main class="shelkography cifrovaya">
		<!-- LINE1 -->

		<div class="price-image-container">
			<?= Html::img('@web/img/pryamaya-price.jpg', [
				'alt' => 'Прамая печать прайс'
			]) ?>
		</div>

		<div class="line1">
			<div class="container clearfix">
				<h2>Прямая печать</h2>
				<div class="line1-left clearfix">
					<div class="line1-left-description">
						<h1>Цифровая печать</h1>
						<p>
							Преимущества прямого метода печати <br>
(цифровая печать) на футболках в нашей студии:
						</p>
					</div>

					<div class="line1-left-elements">
						<div class="line1-left-elements-top clearfix">
							<div class="line1-left-elements-top-el">
								<img src="/img/cifrovaya-line1-item1.png" alt="">
								<h3>Расходные <br>
материалы</h3>
								<p>Отличное качество <br>
и нетоксичность красок. <br>
Такие футболки с печатью <br>
не вызывают раздражения.</p>
							</div>
							<div class="line1-left-elements-top-el">
								<img src="/img/cifrovaya-line1-item2.png" alt="">
								<h3>Опыт</h3>
								<p>Имеем большой опыт прямой <br>
печати – отпечатано более <br>
тысячи принтов разной <br>
степени сложности</p>
							</div>
							<div class="line1-left-elements-top-el">
								<img src="/img/cifrovaya-line1-item3.png" alt="">
								<h3>Демократичная <br>
цена</h3>
								<p>Лучше, чем у конкурентов</p>
							</div>
							<div class="line1-left-elements-top-el">
								<img src="/img/cifrovaya-line1-item4.png" alt="">
								<h3>Работаем <br>
быстро</h3>
								<p>Быстрая печать <br> 
и оперативная доставка</p>
							</div>
						</div>
					</div>
				</div>
				<div class="line1-right">
					<img src="/img/cifrovaya-right-foto.png" alt="">
				</div>
			</div>
		</div>
		<!-- END OF LINE1 -->

		<!-- LINE2 -->
		<div class="line2">
			<div class="container">
				<div class="line2-video" onclick="playVideo(1)" id="video-1">
					
				</div>
				<div class="subvideo clearfix">
					<span class="subvideo-left">
						Ваш цветной принтер может напечатать изображение любой сложности, верно? Наш текстильный принтер под контролем опытного мастера студии способен творить не меньшие чудеса! Методом прямой печати нанесем на футболку растровое или векторное изображение и даже вашу любимую фотографию или рисунок, который скачали с Интернета перед визитом к нам. <br>
Метод цифровой печати позволяет печатать на футболках, рубашках, толстовках с отсутствием промежуточных этапов, свойственных для классического нанесения. Максимальная насыщенность красок, передача даже самых мелких деталей изображений, самые сжатые сроки выполнения заказа и высокая стойкость нанесения – ключевые преимущества метода. Отличный выбор для небольших полноцветных тиражей.
					</span>
					<span class="subvideo-right">
						Зачастую перед цифровой печатью для макета требуется предпечатная подготовка – мы осуществляем полную и качественную подготовку изображения под нанесение. Подготавливается и само изделие – наносится тонкий слой праймера для максимально качественного закрепления краски на ткани. В термопрессе удаляются излишки напыления и создается максимально гладкая поверхность, на которой и печатается изображение. Остается его закрепить все в том же термопрессе и футболку или другую вещь из текстиля можно выдавать заказчику! <br><br>

Печать на 1 футболку цифровым методом требует около 15 минут, из них около 5-ти минут уходит непосредственно на нанесение.
					</span>
				</div>
			</div>
		</div>
		<!-- END OF LINE2 -->

		<?= ReviewsWidget::widget() ?>

		<!-- LINE4 -->
		<div class="line4">
			<div class="container clearfix">
				<div class="line4-left">
					<img src="/img/line4-postman.png" alt="">
				</div>
				<div class="line4-right">
					<h3>
						Мы работаем
					</h3>
					<h2>
						По всей России!
					</h2>
					<span class="line4-right-text1">
						Ваш заказ доставят прямо к двери в течении <br>
2 часов с момента оформления заказа!
					</span>
					<div class="line4-right-text2">
						<p>
							Стоимость доставки по Санкт-Петербургу в пределах КАД - <br><strong>350 рублей!</strong>
						</p>
						<p>
							За пределами СПб рассчитывается индивидуально. Вы можете <br>
забрать Ваш заказ с нашей студии:
							<a href="#">Контакты</a>
						</p>
						<p>
							Так же мы отправляем ваши заказы по всему миру! <br>
Стоимость доставки по России - <strong>350 рублей</strong> <br>
Остальные страны и города - <strong>450 рублей</strong><br>
Чтобы заказать доставку - Пишите нам или звоните: 
						</p>
						<a href="tel:88129819484" class="line4-right-text2-number">981 94 84</a>
					</div>
					<a href="<?= Url::to(['constructor/']) ?>" class="line4-right-makeOrder">Заказать</a>
				</div>
			</div>
		</div>
		<!-- END OF LINE4 -->

		<?= \frontend\widgets\OurWorksSlider::widget() ?>
	</main>