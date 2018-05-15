<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<?if($arResult['OK']):?>
<?ShowMessage(array('TYPE' => 'OK','MESSAGE' => $arResult['OK']));?>
<?endif;?>
<?if($arResult['ERROR']):?>
<?ShowMessage(array('TYPE' => 'ERROR','MESSAGE' => $arResult['ERROR']));?>
<?endif;?>
<script type="text/javascript">
	var employee_data = <?= json_encode($arResult["dataEmployee"])?>;
	window.onload = function() {
		var date_select = document.getElementsByName('UF_PERIOD')[0]
		check_employee(date_select.options[date_select.selectedIndex].value);
	};
	function check_employee(date) {
		var editKPI = document.getElementById('editKPI');
		if (date in employee_data) {
			var field;
			var formKPI = document.getElementById('formKPI');
			var additionalField;
			for (var kpi_id in employee_data[date]) {
				field = document.getElementById(kpi_id);
				field.value = employee_data[date][kpi_id][0].UF_VALUE;
				additionalField = document.createElement('input');
				additionalField.type = 'hidden';
				additionalField.className = 'additionalFields';
				additionalField.name = 'KPIID[' + kpi_id + ']';
				additionalField.value =  employee_data[date][kpi_id][0].ID;
				formKPI.appendChild(additionalField);
			}
			editKPI.name = "editKPI";

		} else {
			var paras = document.getElementsByClassName('additionalFields');
			while(paras[0]) {
			    paras[0].parentNode.removeChild(paras[0]);
			}
			editKPI.name = "saveKPI";
		}
	}
</script>

<form action="<?=POST_FORM_ACTION_URI?>" method="POST" id="formKPI">
<select name="UF_PERIOD" onchange="check_employee(this.options[this.selectedIndex].value)">
<?foreach($arResult['PERIOD_ITEMS'] as $arItem):?>
<option <?=$arItem['SELECTED'];?> value="<?=$arItem['VALUE'];?>"><?=$arItem['VALUE'];?></option>
<?endforeach;?>
</select>
<table style="border-width: 0px; border-spacing: 10px;">
<tbody>

<?foreach($arResult["ITEMS"] as $arItem):?>
<tr>
<td><?=$arItem['NAME'];?></td>
<td><input type="text" name="KPI[<?=$arItem['ID']?>]" id="<?=$arItem['ID']?>" required value="<?=$_REQUEST['kpi-'.$arItem['ID']];?>"></td>
<td>
<?foreach($arItem['PROPERTY_REGULATIONS_VALUE'] as $fileRegulation):?>
<a href="<?=$fileRegulation['SRC'];?>" target="_blank"><?=$fileRegulation['ORIGINAL_NAME'];?></a><br>
<?endforeach;?>
</td>
</tr>
<?endforeach;?>
<tr>
<td colspan="3">
<input type="submit" name="saveKPI" id="editKPI" value="Сохранить">
<input type="reset" value="Очистить">
</td>
</tr>
</tbody>
</table>
</form>