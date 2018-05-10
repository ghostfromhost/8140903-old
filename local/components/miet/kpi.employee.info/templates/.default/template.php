<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<?if($arResult['OK']):?>
<?ShowMessage(array('TYPE' => 'OK','MESSAGE' => $arResult['OK']));?>
<?endif;?>
<?if($arResult['ERROR']):?>
<?ShowMessage(array('TYPE' => 'ERROR','MESSAGE' => $arResult['ERROR']));?>
<?endif;?>

<table style="border-width: 0px; border-spacing: 10px;">
<tbody>
<?foreach($arResult["ITEMS"] as $arItem):?>
<tr>
<td><?=$arItem['NAME'];?></td>
<td><?=$arItem['PROPERTY_INDICATOR_TYPE_VALUE'];?></td>
<td><?=$arItem['PROPERTY_WEIGHT_VALUE'];?></td>
<td>
<?foreach($arItem['PROPERTY_REGULATIONS_VALUE'] as $fileRegulation):?>
<a href="<?=$fileRegulation['SRC'];?>" target="_blank"><?=$fileRegulation['ORIGINAL_NAME'];?></a><br>
<?endforeach;?>
</td>
</tr>
<?endforeach;?>
</tbody>
</table>
</form>