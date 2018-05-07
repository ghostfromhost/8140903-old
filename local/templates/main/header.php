<?php 

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
?>
<?use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Page\Asset;
Loc::loadMessages(__FILE__);?>

<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang=<?=LANGUAGE_ID?>>
<head profile="http://gmpg.org/xfn/11">
    <?$APPLICATION->SetTitle("Page title");?>
	<?$APPLICATION->ShowHead();?>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <!-- Load Jquery -->
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/_include/js/jquery.js", true);?>
    <!-- End Load -->

    <!-- for IE6 i'm sorry but there is too much wrong with it, needs warning at least, you can disable it by delething this load. -->
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/_include/js/jquery.badBrowser.js", true);?>
    <!-- End Load -->

    <!-- ALL jQuery Tools. No jQuery library -->
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/_include/js/jquery.tools.js", true);?>
    <!-- End Load -->

    <!-- Load Jquery Easing -->
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/_include/js/jquery.easing.js", true);?>
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/_include/js/jquery.css-transform.js", true);?>
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/_include/js/jquery.css-rotate-scale.js", true);?>
    <!-- End Load -->

    <!-- Load Jquery Cycle and adiacent CSS File -->
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/_include/js/jquery.cycle.js", true);?>
    <?Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/_include/css/jquery.cycle.css");?>

    <!-- End Load -->

    <!-- Load Cufon and Adiacent Font Files, and apply Cufon on used Styles -->
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/_include/js/cufon.js", true);?>
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/_include/js/Museo_400-Museo_italic_400.font.js", true);?>
    
    <!-- End Load -->

    <!-- Load Pretty Photo -->
    <?Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/_include/css/prettyPhoto.css");?>
    
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/_include/js/jquery.prettyPhoto.js", true);?>
    
    <script type="text/javascript">
       /* pretty photo responds on rel='prettyPhoto' */
       jQuery(document).ready(function() { $("a[rel^='prettyPhoto']").prettyPhoto();   });
    </script>
    <!-- End Load -->

    <!-- Load Superfish Drowpdown Menu, and run it -->
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/_include/js/jquery.hoverInt.js", true);?>
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/_include/js/jquery.bgiframe.js", true);?>
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/_include/js/superfish.js", true);?>
    
    <!-- End Load -->

    <!-- Load Jquery Roundabout, and adiacent JS & CSS file -->
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/_include/js/jquery.roundabout.js", true);?>
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/_include/js/jquery.roundabout-shapes-1.1.js", true);?>


    <?Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/_include/css/jquery.roundabout.css");?>
    
    <!-- End Load -->

    <!-- Load SWFObject, used for video embedding -->
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/_include/js/swfobject.js", true);?>
    <!-- End Load -->

    <!-- Load Quicksand -->
     <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/_include/js/jquery.quicksand.js", true);?>
    
    <!-- End Load -->

    <!-- Load some small custom scripts -->
     <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/_include/js/custom.js", true);?>

    <!-- End Load -->

    <!-- Load PNG Fix older IE Versions -->
    <!--[if lt IE 7]>
        <script type="text/javascript" src="_include/js/pngfix.js"></script>
        <script type="text/javascript">DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <!-- End Load -->

    <!-- Load Main Stylesheet -->
    <?Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/template_styles.css");?>
   
    <!-- End Load -->

    <!-- Load Alternate Stylesheets, can be disabled if not used -->
    <?Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/_include/css/style-orange.css");?>
    <?Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/_include/css/style-dirtyblue.css");?>
    <?Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/_include/css/style-redish.css");?>
    <?Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/_include/css/style-green.css");?>
    <?Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/_include/css/style-pink.css");?>
   
     <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/_include/js/swfobject.js", true);?>
     <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/_include/js/styleswitch.js", true);?>
    <!-- End Load -->

    <!-- Load Main Enhancements Stylesheet border radius, transparency and such things -->
    <?Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/_include/css/style-enhance.css");?>
    <!-- End Load -->

    <!-- Load IE Stylesheet -->
    <!--[if IE]>
    <link rel="stylesheet" href="_include/css/ie.css" type="text/css" media="screen" />
    <![endif]-->
    <!-- End Load -->

    <!-- Load IE6 Stylesheet -->
    <!--[if IE 6]>
    <link rel="stylesheet" href="_include/css/ie6.css" type="text/css" media="screen" />
    <![endif]-->
    <!-- End Load -->


</head>
<body>
<?$APPLICATION->ShowPanel();?>
<!-- start style switcher -->
<ul class="style-switcher clearfix">
    <li><a href="javascript:chooseStyle('none', 60)"><img src="<?=SITE_TEMPLATE_PATH;?>/images/color-blue.jpg" width="35" height="35" alt="" /></a></li>
    <li><a href="javascript:chooseStyle('orange', 60)"><img src="<?=SITE_TEMPLATE_PATH;?>/images/color-orange.jpg" width="35" height="35" alt="" /></a></li>
    <li><a href="javascript:chooseStyle('dirtyblue', 60)"><img src="<?=SITE_TEMPLATE_PATH;?>/images/color-dirtyblue.jpg" width="35" height="35" alt="" /></a></li>
    <li><a href="javascript:chooseStyle('redish', 60)"><img src="<?=SITE_TEMPLATE_PATH;?>/images/color-redish.jpg" width="35" height="35" alt="" /></a></li>
    <li><a href="javascript:chooseStyle('green', 60)"><img src="<?=SITE_TEMPLATE_PATH;?>/images/color-green.jpg" width="35" height="35" alt="" /></a></li>
    <li><a href="javascript:chooseStyle('pink', 60)"><img src="<?=SITE_TEMPLATE_PATH;?>/images/color-pink.jpg" width="35" height="35" alt="" /></a></li>
    <li><img src="<?=SITE_TEMPLATE_PATH;?>/images/color.jpg" width="22" height="70" alt="" /></li>
</ul>
<!-- end style switcher -->


<!-- start top and main menu -->
<div class="main-menu">
<div class="ornament">
    <div class="containit">
        <?$APPLICATION->IncludeComponent(
"bitrix:main.include",
"",
Array(
"COMPONENT_TEMPLATE" => ".default",
"AREA_FILE_SHOW" => "file",
"AREA_FILE_SUFFIX" => "inc",
"EDIT_TEMPLATE" => "",
"PATH" => SITE_TEMPLATE_PATH."/include_areas/logo.php"
)
);?>
<?$APPLICATION->IncludeComponent("bitrix:menu", "top_menu", Array(
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "2",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
			0 => "",
		),
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "A",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"ROOT_MENU_TYPE" => "left",	// Тип меню для первого уровня
		"USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
	),
	false
);?><br>

        <div class="clear"></div>
    </div>
</div>
</div>
<?$APPLICATION->IncludeComponent("bitrix:photo.section", "slider_image", Array(
	"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
		"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"ELEMENT_SORT_FIELD" => "sort",	// По какому полю сортируем фотографии
		"ELEMENT_SORT_ORDER" => "asc",	// Порядок сортировки фотографий в разделе
		"FIELD_CODE" => array(	// Поля
			0 => "ID",
			1 => "NAME",
			2 => "SORT",
			3 => "PREVIEW_PICTURE",
			4 => "",
		),
		"FILTER_NAME" => "arrFilter",	// Имя массива со значениями фильтра для фильтрации элементов
		"IBLOCK_ID" => "24",	// Инфоблок
		"IBLOCK_TYPE" => "content",	// Тип инфоблока
		"LINE_ELEMENT_COUNT" => "3",	// Количество фотографий, выводимых в одной строке таблицы
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
		"META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"PAGER_TITLE" => "Фотографии",	// Название категорий
		"PAGE_ELEMENT_COUNT" => "20",	// Количество элементов на странице
		"PROPERTY_CODE" => array(	// Свойства
			0 => "URL",
			1 => "",
		),
		"SECTION_CODE" => "",	// Код раздела
		"SECTION_ID" => $_REQUEST["SECTION_ID"],	// ID раздела
		"SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
		"SECTION_USER_FIELDS" => array(	// Свойства раздела
			0 => "",
			1 => "",
		),
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"SHOW_404" => "N",	// Показ специальной страницы
	),
	false
);?><br>


<!-- end top and main menu -->
<!-- start header alternate -->
<div class="header-alt">

                 <div class="slide slide-roundabout bg1">
                     <div class="containit ornament-right">
                        <div class="roundaboutshadow">
                            <h1 class="mb4">You can have a Bigger single  Roundabout here.</h1>
                            <p class="mb20">Amazingly this IS compatible with all modern and current Browsers.</p>
                            <!-- roundabout images targets, prettyphoto opens on click of the middle item -->

                            <script type="text/javascript" charset="utf-8">
                              function roundaboutimage1(){  $.prettyPhoto.open('<?=SITE_TEMPLATE_PATH;?>/images/showcase/showcase1.jpg', 'title', 'Some Brilliant Project'); }
                              function roundaboutimage2(){  $.prettyPhoto.open('<?=SITE_TEMPLATE_PATH;?>/images/showcase/showcase2.jpg', 'title', 'Another One'); }
                              function roundaboutimage3(){  $.prettyPhoto.open('<?=SITE_TEMPLATE_PATH;?>/images/showcase/showcase3.jpg', 'title', 'This is Insane'); }
                              function roundaboutimage4(){  $.prettyPhoto.open('<?=SITE_TEMPLATE_PATH;?>/images/showcase/showcase4.jpg', 'title', 'Another Comment'); }
                              function roundaboutimage5(){  $.prettyPhoto.open('<?=SITE_TEMPLATE_PATH;?>/images/showcase/showcase5.jpg', 'title', 'This roundabout Rules'); }
                              function roundaboutimage6(){  $.prettyPhoto.open('<?=SITE_TEMPLATE_PATH;?>/images/showcase/showcase6.jpg', 'title', 'Awsome Commment'); }
                              function roundaboutimage7(){  $.prettyPhoto.open('<?=SITE_TEMPLATE_PATH;?>/images/showcase/showcase7.jpg', 'title', 'And Another One'); }
                           </script>
                            <!-- the actual roundabout -->
                            <div id="filler"><!--  --></div>
                        </div>
                        <!-- start the roundabout with descriptions -->
                        <script type="text/javascript">
                        //<![CDATA[
                    			var descs = {
                    				roundaboutimage1: 'Some text about the item <a href="#">a link</a> here. ',
                    				roundaboutimage2: 'He has the look of a wise, fierce warrior.',
                    				roundaboutimage3: 'Attention all mice: you&rsquo;ve been warned.',
                    				roundaboutimage4: 'Some text about the item <a href="#">a link</a> here.',
                    				roundaboutimage5: 'Introducing: the INCREDIBLE ROUNDABOUT!',
                    				roundaboutimage6: 'Attention all mice: you&rsquo;ve been warned.',
                    				roundaboutimage7: 'Yes you can have Video here if you want.'
                    			};
                                // settings for first button, for each roundabout image one setting
                    			var linkone = {
                    				roundaboutimage1: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>View Details</span></a>',
                    				roundaboutimage2: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>View Details</span></a>',
                    				roundaboutimage3: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>View Details</span></a>',
                    				roundaboutimage4: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>View Details</span></a>',
                    				roundaboutimage5: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>View Details</span></a>',
                    				roundaboutimage6: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>View Details</span></a>',
                    				roundaboutimage7: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>View Details</span></a>'
                    			};
                                // settings for second button, for each roundabout image one setting
                    			var linktwo = {
                    				roundaboutimage1: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>Purchase This Now</span></a>',
                    				roundaboutimage2: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>Get it at Themeforest</span></a>',
                    				roundaboutimage3: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>Purchase This Now</span></a>',
                    				roundaboutimage4: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>Get it at Themeforest</span></a>',
                    				roundaboutimage5: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>Do Something Now</span></a>',
                    				roundaboutimage6: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>Purchase This Now</span></a>',
                    				roundaboutimage7: '<a class="btn-medium" href="http://themeforest.net/user/bogdanspn/portfolio?ref=bogdanspn"><span>Cufon Buttons are Sexy</span></a>'
                    			};
                                // what happens on focus and on blur
                    			$('#roundabout li').focus(function() {
                                    var useLinkone = (typeof linkone[$(this).attr('id')] != 'undefined') ? linkone[$(this).attr('id')] : '';
                    				$('#roundaboutlinkone').html(useLinkone).fadeIn(200);
                                    var useLinktwo = (typeof linktwo[$(this).attr('id')] != 'undefined') ? linktwo[$(this).attr('id')] : '';
                    				$('#roundaboutlinktwo').html(useLinktwo).fadeIn(200);
                    				var useText = (typeof descs[$(this).attr('id')] != 'undefined') ? descs[$(this).attr('id')] : '';
                    				$('#roundaboutdescription').html(useText).fadeIn(200);
                                    Cufon.replace('#roundaboutdescription, #roundaboutlinkone,  #roundaboutlinktwo', { hover: true, textShadow: '1px 1px 0 #ffffff', fontFamily: 'Museo' });
                    			}).blur(function() {
                                    $('#roundaboutlinkone').fadeOut(200);
                                    $('#roundaboutlinktwo').fadeOut(200);
                    				$('#roundaboutdescription').fadeOut(200);
                    			});

                    			$(document).ready(function() {
                                    var interval;
                    				$('#roundabout')
                                    .roundabout({
                                        shape: 'lazySusan',
                    					easing: 'swing',
                                        minOpacity: 1, // 1 fully visible, 0 invisible
                                        minScale: 0.5, // tiny!
                    					duration: 400,
                                        btnNext: '#roundaboutnext',
                                        btnPrev: '#roundaboutprevious',
                                        clickToFocus: true
                    				});
                    			});
                                function startAutoPlay() {
                    				return setInterval(function() {
                    					$('#roundabout').roundabout_animateToNextChild();
                    				}, 3000);
                    			}
                         //]]>
                    	 </script>
                     </div>

                 </div>

</div>