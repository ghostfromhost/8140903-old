<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
###������������� ���������� ���������� �������###
global $DB;
/** @global CUser $USER */
global $USER;
###
\Bitrix\Main\Loader::includeModule('miet.kpi');
use MIET\KPI;
###�������� ������� ���������� �� ������������ � ���������� �� � ������� ����###
$arParams["USER_ID"] = intval($arParams["USER_ID"]);
if(!$arParams["USER_ID"]) {
ShowError(GetMessage("EMPTY_USER"));
@define("ERROR_404", "Y");
if($arParams["SET_STATUS_404"]==="Y") {
CHTTP::SetStatus("404 Not Found");
}
return array();
}
if(!$_REQUEST['UF_PERIOD']) {
$_REQUEST['UF_PERIOD'] = '01.' . date('m') . '.' . date('Y');
}
$arParams["DATE_FORMAT"] = trim($arParams["DATE_FORMAT"]);
if(strlen($arParams["DATE_FORMAT"]) <= 0) {
$arParams["DATE_FORMAT"] = $DB->DateFormatToPHP(CSite::GetDateFormat("SHORT"));
}
###
###���������� �������� KPI###
/*if($_REQUEST['saveKPI']) {
if(KPI\KPIManager::SetKPIEmployee($arParams["USER_ID"],
$_REQUEST['UF_PERIOD'], $_REQUEST['KPI'])) {
$arResult['OK'] = '��������� ������� ���������';
} else {
$arResult['ERROR'] = '������ ��� ����������';
}
}*/
###
###��������� ������ �� ��###
if($this->StartResultCache(false, array(($arParams["CACHE_GROUPS"] === "N" ? false: $USER->GetGroups()), $bUSER_HAVE_ACCESS))) {
###������������ ������ �������� �������� (�����, ���)###
//��������� �������� ������ � ����
for($i = 1; $i <= 12; $i++) {
if(strlen($i) == 1) {
$i = '0' . $i;
}
$arResult['PERIOD_ITEMS'][] = array(
'SELECTED' => ($_REQUEST['UF_PERIOD'] == '01.' . $i . '.' . date('Y')) ? 'selected' : '', //�������� ����� ���������, ���� ������� �����
'VALUE' => '01.' . $i . '.' . date('Y')
);
}
###
###��������� ������ ����������� KPI ��� ����������###
$arResult['ITEMS'] = KPI\KPIManager::GetKPIEmployee($arParams["USER_ID"]);
###����������� �������� ��������� ������� $arResult###
$this->SetResultCacheKeys(array(
"ITEMS",
"FIO_USER",
"PROGRAM_DETAIL_PAGE_URL",
"FORM_ACTION",
"NAME"
));
###
###����������� ������� ����������###
$this->IncludeComponentTemplate();
###
}
###����� ��������� �� ����###
if(isset($arResult["ITEM"])) {
$this->SetTemplateCachedData();
return $arResult["ITEM"];
}