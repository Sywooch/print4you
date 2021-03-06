<?php 

use yii\helpers\Html;
use yii\helpers\Url;

// common style.css
$css_file_name = Yii::getAlias('@frontend') . '/web/constructor-assets/css/constructor.css';
$this->registerCssFile('/constructor-assets/css/constructor.css?v='. filemtime($css_file_name));

// fabric.js
$this->registerJsFile('/constructor-assets/js/fabric.min.js', [
	'position' => \yii\web\View::POS_END,
]);

// common constructor.js
$js_file_name = Yii::getAlias('@frontend') . '/web/constructor-assets/js/constructor.js';
$this->registerJsFile('/constructor-assets/js/constructor.js?v=' . filemtime($js_file_name), [
	'position' => \yii\web\View::POS_END,
]);

// avaliable constructor fonts
$constructor_fonts = [
	'Acrobat Bold' => 'akrobatBold',
	'Sports World Regular' => 'sportsWorldRegular',
	'Helvetica Neue Cyr Roman' => 'helveticaNeueCyrRoman',
	'Proxima Nova Bold' => 'proximaNovaBold',
	'proxima Nova Semibold' => 'proximaNovaSemibold',
	'a_AlgeriusNr' => 'a_AlgeriusNr',
	'a_AlternaCmD' => 'a_AlternaCmD',
	'a_AlternaSw' => 'a_AlternaSw',
	'a_AlternaTitulB' => 'a_AlternaTitulB',
	'a_AntiqueTitulGr' => 'a_AntiqueTitulGr',
	'a_AssuanBrk' => 'a_AssuanBrk',
	'a_AvanteCpsL' => 'a_AvanteCpsL',
	'a_BentTitulDcFr' => 'a_BentTitulDcFr',
	'a_BighausTitul' => 'a_BighausTitul',
	'a_BighausTitulBrkHil' => 'a_BighausTitulBrkHil',
	'a_BighausTitulOtlDr' => 'a_BighausTitulOtlDr',
	'a_BosaNovaCp' => 'a_BosaNovaCp',
	'a_BosaNovaDcFr' => 'a_BosaNovaDcFr',
	'a_BosaNovaOtl' => 'a_BosaNovaOtl',
	'a_BraggaOtl' => 'a_BraggaOtl',
	'a_BraggaOtlSh' => 'a_BraggaOtlSh',
	'a_BraggaStrip' => 'a_BraggaStrip',
	'a_BraggaTitul' => 'a_BraggaTitul',
	'a_Bremen' => 'a_Bremen',
	'a_BremenCaps' => 'a_BremenCaps',
	'a_BremenCapsNr' => 'a_BremenCapsNr',
	'a_BremenDcFr' => 'a_BremenDcFr',
	'a_CampusGrav' => 'a_CampusGrav',
	'a_CampusMarine' => 'a_CampusMarine',
	'a_CampusOtl' => 'a_CampusOtl',
	'a_CampusPrLy' => 'a_CampusPrLy',
	'a_CampusPrsp' => 'a_CampusPrsp',
	'a_CampusStrip' => 'a_CampusStrip',
	'a_ConceptoTit' => 'a_ConceptoTit',
	'a_ConceptoTitulNrFy' => 'a_ConceptoTitulNrFy',
	'acquestscript' => 'acquestscript',
	'AdineKirnberg' => 'AdineKirnberg',
	'a_DiscoSerif' => 'a_DiscoSerif',
	'a_DiscoSerifDbl' => 'a_DiscoSerifDbl',
	'Advokat_Modern' => 'Advokat_Modern',
	'a_Empirial' => 'a_Empirial',
	'a_EmpirialCmDn' => 'a_EmpirialCmDn',
	'agatha-modern' => 'agatha-modern',
	'a_GildiaLnBk' => 'a_GildiaLnBk',
	'a_GlobusLnBk' => 'a_GlobusLnBk',
	'a_GlobusOblique' => 'a_GlobusOblique',
	'a_Groto' => 'a_Groto',
	'a_GrotoGr' => 'a_GrotoGr',
	'akrobatBold' => 'akrobatBold',
	'aksent' => 'aksent',
	'a_LatinoTitulBr' => 'a_LatinoTitulBr',
	'a_LCDNova3DCmObl' => 'a_LCDNova3DCmObl',
	'a_LCDNovaObl' => 'a_LCDNovaObl',
	'AleksandraC' => 'AleksandraC',
	'Alexandra_Script' => 'Alexandra_Script',
	'AlexandraZeferinoOne' => 'AlexandraZeferinoOne',
	'algerius' => 'algerius',
	'AllegroScript' => 'AllegroScript',
	'a_MachinaOrtoDgStr' => 'a_MachinaOrtoDgStr',
	'a_MachinaOrtoSht' => 'a_MachinaOrtoSht',
	'a_MachinaOrtoSls' => 'a_MachinaOrtoSls',
	'Amadeus' => 'Amadeus',
	'a_ModernoDcFr' => 'a_ModernoDcFr',
	'AndantinoScript' => 'AndantinoScript',
	'Annabelle' => 'Annabelle',
	'a_PlakatTitulHlStr' => 'a_PlakatTitulHlStr',
	'Aquarelle' => 'Aquarelle',
	'arabic' => 'arabic',
	'Archive' => 'Archive',
	'AriadnaScript' => 'AriadnaScript',
	'Ariston' => 'Ariston',
	'a_RombyGr' => 'a_RombyGr',
	'a_RombyOtl' => 'a_RombyOtl',
	'a_RombyRndOtl' => 'a_RombyRndOtl',
	'Arsenal-Bold' => 'Arsenal-Bold',
	'arthurgothic' => 'arthurgothic',
	'artnouv' => 'artnouv',
	'a_SeriferTitul' => 'a_SeriferTitul',
	'a_Simpler2Otl' => 'a_Simpler2Otl',
	'a_SimplerBrk' => 'a_SimplerBrk',
	'a_SimplerClg' => 'a_SimplerClg',
	'a_SimplerFnt' => 'a_SimplerFnt',
	'a_SimplerGr' => 'a_SimplerGr',
	'a_StamperBrk' => 'a_StamperBrk',
	'astra' => 'astra',
	'AuroraScript' => 'AuroraScript',
	'AvalonMedium' => 'AvalonMedium',
	'BadScript' => 'BadScript',
	'bagira' => 'bagira',
	'BananaBrick' => 'BananaBrick',
	'beastim' => 'beastim',
	'beastvs' => 'beastvs',
	'bedrockc' => 'bedrockc',
	'beresta' => 'beresta',
	'BetinaScriptCTT' => 'BetinaScriptCTT',
	'BetinaScriptExtraCTT' => 'BetinaScriptExtraCTT',
	'bickhamscr2' => 'bickhamscr2',
	'Bickham_Script_One' => 'Bickham_Script_One',
	'BikhamCyrScript' => 'BikhamCyrScript',
	'birch' => 'birch',
	'blaze' => 'blaze',
	'bmspiralcapcyr' => 'bmspiralcapcyr',
	'BoleroScript' => 'BoleroScript',
	'bonzai' => 'bonzai',
	'boyarsky' => 'boyarsky',
	'brag' => 'brag',
	'Brava' => 'Brava',
	'burlak' => 'burlak',
	'butter' => 'butter',
	'calligraph' => 'calligraph',
	'CalligraphiaOne' => 'CalligraphiaOne',
	'camp' => 'camp',
	'Carolina' => 'Carolina',
	'Casper_R' => 'Casper_R',
	'Cassandra' => 'Cassandra',
	'CeremoniousOne' => 'CeremoniousOne',
	'CeremoniousTwo' => 'CeremoniousTwo',
	'Champagnecyr' => 'Champagnecyr',
	'ChinaCyr' => 'ChinaCyr',
	'clip' => 'clip',
	'Comfortaa-Regular' => 'Comfortaa-Regular',
	'Connetable' => 'Connetable',
	'ConyRegular' => 'ConyRegular',
	'CopyistThin' => 'CopyistThin',
	'Corinthia' => 'Corinthia',
	'corona' => 'corona',
	'Coronet' => 'Coronet',
	'crackman' => 'crackman',
];

?>
<div class="container">
	
	<input type="hidden" id="set_product" value="<?= $set_product ?>">
	<input type="hidden" id="set_cat" value="<?= $set_cat ?>">

	<input type="hidden" id="print-sizes" value='<?= $print_sizes ?>'>

	<!-- TITLE  -->
	
	<div class="constructor-title-container">	
		<h1><?= $title ?></h1>
		<span class="constructor-first-title">Создайте ваш</span>
		<span class="constructor-second-title">Уникальный принт</span>
	</div>
	
	<!-- ENDTITLE -->
	

	<!-- CONSTRUCTOR  -->

	<div class="constrructor-container clearfix">

		<!-- CONSTRUCTOR LEFT -->

		<div class="constructor-left-area">
			<div class="constructor-leftbar-header clearfix">
				<a href="#" class="constructor-leftbar-toogle current-toogle" data-toggle="products-tab">Товары</a>
				<a href="#" class="constructor-leftbar-toogle" data-toggle="text-tab">Текст</a>
				<a href="#" class="constructor-leftbar-toogle" data-toggle="image-tab">Фото</a>
			</div>
			
			<!-- CONSTRUCTOR PRODUCTS TAB -->
			<div id="products-tab" class="constructor-tab">
				<div class="constructor-leftbar-select-container">
					<select id="constructor-leftbar-select">
						<option value="all">Все</option>
					</select>
				</div>

				<div class="constructor-products-list clearfix" id="products-list">

				</div>
				
			</div>

			<!-- END CONSTRUCTOR PRODUCTS TAB -->

			<!-- CONSTRUCTOR TEXT TAB -->
			<div id="text-tab" class="constructor-tab" style="display: none;">
				<span class="add-text-btn" id="add-text">+ Новый текстовой слой</span>
				
				<span class="constructor-product-meta-title">Текст:</span>

				<textarea id="constructor-text" disabled></textarea>

				<span class="constructor-product-meta-title">Выбор шрифта:</span>

				<div class="constructor-text-options">
					<select id="constructor-text-font-family" disabled>
						<?php foreach ($constructor_fonts as $key => $value): ?>
						<option value="<?= $value ?>" style="font-family: <?= $value ?>;"><?= $key ?></option>
						<?php endforeach; ?>
					</select>

				</div>
				
				<span class="constructor-product-meta-title">Цвет текста:</span>

				<div class="constructor-text-options">
					<input type="color" id="text-color" disabled>
				</div>

			</div>
			<!-- END CONSTRUCTOR TEXT TAB -->

			<!-- CONSTRUCTOR IMAGE TAB -->
			<div id="image-tab" class="constructor-tab" style="display: none;">
				<span class="add-image-title">
					Здесь вы можете <button href="#" id="add-image">добавить изображение</button> с компьютера 
					<input type="file" id="fileupload" style="position:absolute; top:-9999999px;">
				</span>

				<ul class="image-rules-list">
					<li>загрузите .png или .jpg</li>
					<li>маленькое фото нельзя напечатать в большом размере</li>
					<li>чтобы нанести фото на всю ширину области печати, нужен размер не менее 1500*1500 пикселей</li>
					<li>максимальный размер файла 2мб</li>
					<li>использование изображения не должно нарушать авторских прав</li>
				</ul>

			</div>
			<!-- END CONSTRUCTOR IMAGE TAB -->


			<div class="constructor-product-color-container">
				
				<span class="constructor-product-meta-title">Цвет товара:</span>

				<div class="constructor-product-colors clearfix"></div>

				<span class="constructor-product-color-value"></span>

			</div>

			<div class="constructor-product-size-container">
				<span class="constructor-product-meta-title">Размер:</span>

				<div class="constructor-product-sizes clearfix">
				</div>

			</div>
			

		</div>

		<!-- END CONSTRUCTOR LEFT -->

		<div class="constructor-center-area" id="canvas-wrap">
			
			<span id="constructor-error">/</span>
			
			<div class="constructor-canvas-area">
				<div class="canvas-bg-container">
					<img src="" alt="" id="canvas-bg-image">
				</div>
					
				<div class="canvas-main-container">
					<canvas id="constructor-canvas" width="190" height="330"></canvas>
				</div>

				<div class="canvas-controls-contaner">
					<button class="canvas-control" id="delete-layer" disabled>Удалить</button>
					<button class="canvas-control" id="x-align-layer" disabled>Гор. выравнивание</button>
					<button class="canvas-control" id="y-align-layer" disabled>Верт. выравнивание</button>
				</div>
			</div>
		</div>


		<!-- CONSTRUCTOR RIGHT -->

		<div class="constructor-right-area">
			
			<span class="right-main-button" id="to-text">Добавить текст</span>
			<span class="right-main-button" id="to-image">Добавить Фото</span>

			<div class="constructor-product-sides-container clearfix">
				<div class="constructor-product-side" id="front-side">

					<span class="product-side-title">Лицевая <br>сторона</span>

					<div class="product-side-image-container">
						<img src="" alt="" class="product-side-image">
					</div>

				</div>

				<div class="constructor-product-side" id="back-side">
					<span class="product-side-title">Обратная <br>сторона</span>

					<div class="product-side-image-container">
						<img src="" alt="" class="product-side-image">
					</div>

				</div>

				<div class="additional-sides clearfix">
					
				</div>

			</div>

			<div class="constructor-price-container">
				<span class="constructor-price-title">Стоимость, не включая печать принта</span>
				<span class="constructor-price-value"></span>
			</div>
			
			<span class="right-buy-button" id="add-cart">Заказать</span>

		</div>

		<!-- END CONSTRUCTOR RIGHT -->
		
		<div id="constructor-loader">
			<?=Html::img('@web/constructor-assets/img/spinner.png', [
				'alt' => 'spinner',
				'class' => 'loader-img',
			]) ?>
			<span id="loader-text"></span>
		</div>
		
	</div>
	<!-- END CONSTRUCTOR  -->
</div>
	
	
<!-- SITE META -->
<div class="container">
	<img src="/img/line5-tshirt.png" alt="" class="tshirt-icon">

	<div class="ad-elements-container clearfix">
		<div class="ad-element clearfix">
			<img src="/img/constructor-plus1.png" class="ad-element-icon">
			<div class="ad-element-info">
				<h2>Номера, фамилии и другие надписи</h2>
				<span>
					Отличное решение для спортсменов. <br>
					Нанесение будет выглядеть не хуже чем то, что видим по ТВ
					на майках и футболках профессионалов.
				</span>
			</div>
		</div>

		<div class="ad-element clearfix">
			<img src="/img/constructor-plus2.png" class="ad-element-icon">
			<div class="ad-element-info">
				<h2>Логотипы и слоганы</h2>
				<span>
					Решение для корпоративов, выставок и других event-мероприятий.
				</span>
			</div>
		</div>

		<div class="ad-element clearfix">
			<img src="/img/constructor-plus3.png" class="ad-element-icon">
			<div class="ad-element-info">
				<h2>Фотографии</h2>
				<span>
					Напечатаем фотографию на футболке - будет выглядеть
					не менее реалистично, чем на компьютере или бумаге из фотостудии.
				</span>
			</div>
		</div>

	</div>


</div>
<!-- END SITE META -->

<!-- CATEGORY INFO -->
<div class="current-category">
	<div id="category-title"></div>
	<div id="category-info"></div>
</div>
<!-- END CATEGORY INFO -->

<!-- REVIEWS -->
<?= \frontend\widgets\ReviewsWidget::widget() ?>
<!-- END REVIEWS -->

<!-- DELIVERY INFO  -->
<?= \frontend\widgets\DeliveryInfoWidget::widget() ?>
<!-- END DELIVERY INFO -->



<!-- SUCCESS MODAL -->
<div id="success-modal">
	<div class="success-modal-container">
		<div class="success-modal-title clearfix">
			<span class="success-modal-title-text">Ваш заказ успешно добавлен в корзину!</span>
			<div class="success-modal-title-icon-container" data-action="close-success-modal">
				<?= Html::img('@web/constructor-assets/img/close-icon.png', [
					'alt' => 'close icon',
					'class' => 'success-modal-title-icon',
				]) ?>
			</div>
		</div>
		<div class="success-modal-body">
			<div class="success-modal-content clearfix">
				<a href="#" data-action="close-success-modal" class="success-modal-link success-modal-left">Продолжить</a>
				<a href="<?= Url::to(['cart/']) ?>" class="success-modal-link success-modal-right">В корзину</a>
			</div>
		</div>
	</div>
</div>

