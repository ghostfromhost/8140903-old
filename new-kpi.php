<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->IncludeComponent(
	"bitrix:wiki",
	"",
	Array(
		"ADD_SECTIONS_CHAIN" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"ELEMENT_NAME" => $_REQUEST["title"],
		"IBLOCK_ID" => "",
		"IBLOCK_TYPE" => "news",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"NAV_ITEM" => "",
		"PATH_TO_USER" => "",
		"RATING_TYPE" => "",
		"SEF_MODE" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_RATING" => "",
		"USE_REVIEW" => "N",
		"VARIABLE_ALIASES" => Array("oper"=>"oper","wiki_name"=>"wiki_name")
	)
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>