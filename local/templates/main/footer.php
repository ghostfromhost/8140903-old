<?php
?>
<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
?>
<div class="big-footer">
<div class="top-shadow-footer"><!--  --></div>
    <div class="containit">

        <div class="full-width clearfix">
                <div class="one-fourth panel">
                    <div class="nopad">
                    <h4>Lorem Ipsum</h4>
                    <ul>
                        <li><a href="#">Nulla vel lorem</a></li>
                        <li><a href="#">Porttitor orci vulputate</a></li>

                        <li><a href="#">Placerat mollis</a></li>
                        <li><a href="#">Suscipit risus felis</a></li>
                        <li class="last"><a href="#">Nullam ligula felis</a></li>
                    </ul>
                    </div>
                </div>
                <div class="one-fourth panel border-vert-left">

                    <div class="padleft">
                    <h4>Lorem Ipsum</h4>
                    <ul>
                        <li><a href="#">Nulla vel lorem</a></li>
                        <li><a href="#">Porttitor orci vulputate</a></li>
                        <li><a href="#">Placerat mollis</a></li>
                        <li><a href="#">Suscipit risus felis</a></li>

                        <li class="last"><a href="#">Nullam ligula felis</a></li>
                    </ul>
                    </div>
                </div>
                <div class="one-fourth panel border-vert-left">
                	<?$APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						Array(
						"COMPONENT_TEMPLATE" => ".default",
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "",
						"PATH" => SITE_TEMPLATE_PATH."/include_areas/contacts.php"
						)
						);?>
                </div>
                <div class="one-fourth-last panel border-vert-left newsletter">
                    <div class="padleft">

                    <h4>Join Our<br/> Newsletter</h4>
                    <p>Curabitur placerat, urna eu fringilla venenatis, orci mi tincidunt nulla, vitae iaculis augue.</p>
                    <table cellpadding="0" cellspacing="0">
                      <tr>
                        <td><input name="" class="field"/></td>
                        <td><input type="image" name="go" src="<?=SITE_TEMPLATE_PATH;?>/images/newsletter-input-button.png" alt="Go" class="form-imagebutton" /></td>
                      </tr>

                    </table>
                    <span class="small">Lorem ipsum <a href="#">dorem mors</a>.</span>
                    </div>
                </div>
        </div>

    </div>
</div>

<!-- end big footer -->

<!-- start small footer -->
<div class="small-footer">
    <div class="containit">

       <div class="copy">Copyright &copy; <? echo date('Y'); ?></div>
       <div class="social">
        <?$APPLICATION->IncludeComponent("bitrix:news.list", "social_icons", Array(
	"ACTIVE_DATE_FORMAT" => "d.m.Y",	// ������ ������ ����
		"ADD_SECTIONS_CHAIN" => "N",	// �������� ������ � ������� ���������
		"AJAX_MODE" => "N",	// �������� ����� AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// �������������� �������������
		"AJAX_OPTION_HISTORY" => "N",	// �������� �������� ��������� ��������
		"AJAX_OPTION_JUMP" => "N",	// �������� ��������� � ������ ����������
		"AJAX_OPTION_STYLE" => "Y",	// �������� ��������� ������
		"CACHE_FILTER" => "N",	// ���������� ��� ������������� �������
		"CACHE_GROUPS" => "Y",	// ��������� ����� �������
		"CACHE_TIME" => "36000000",	// ����� ����������� (���.)
		"CACHE_TYPE" => "A",	// ��� �����������
		"CHECK_DATES" => "Y",	// ���������� ������ �������� �� ������ ������ ��������
		"DETAIL_URL" => "",	// URL �������� ���������� ��������� (�� ��������� - �� �������� ���������)
		"DISPLAY_BOTTOM_PAGER" => "N",	// �������� ��� �������
		"DISPLAY_DATE" => "Y",	// �������� ���� ��������
		"DISPLAY_NAME" => "Y",	// �������� �������� ��������
		"DISPLAY_PICTURE" => "Y",	// �������� ����������� ��� ������
		"DISPLAY_PREVIEW_TEXT" => "Y",	// �������� ����� ������
		"DISPLAY_TOP_PAGER" => "N",	// �������� ��� �������
		"FIELD_CODE" => array(	// ����
			0 => "ID",
			1 => "NAME",
			2 => "SORT",
			3 => "PREVIEW_PICTURE",
			4 => "",
		),
		"FILTER_NAME" => "",	// ������
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// �������� ������, ���� ��� ���������� ��������
		"IBLOCK_ID" => "25",	// ��� ��������������� �����
		"IBLOCK_TYPE" => "content",	// ��� ��������������� ����� (������������ ������ ��� ��������)
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// �������� �������� � ������� ���������
		"INCLUDE_SUBSECTIONS" => "Y",	// ���������� �������� ����������� �������
		"MESSAGE_404" => "",	// ��������� ��� ������ (�� ��������� �� ����������)
		"NEWS_COUNT" => "20",	// ���������� �������� �� ��������
		"PAGER_BASE_LINK_ENABLE" => "N",	// �������� ��������� ������
		"PAGER_DESC_NUMBERING" => "N",	// ������������ �������� ���������
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// ����� ����������� ������� ��� �������� ���������
		"PAGER_SHOW_ALL" => "N",	// ���������� ������ "���"
		"PAGER_SHOW_ALWAYS" => "N",	// �������� ������
		"PAGER_TEMPLATE" => ".default",	// ������ ������������ ���������
		"PAGER_TITLE" => "Социальные сети",	// �������� ���������
		"PARENT_SECTION" => "",	// ID �������
		"PARENT_SECTION_CODE" => "",	// ��� �������
		"PREVIEW_TRUNCATE_LEN" => "",	// ������������ ����� ������ ��� ������ (������ ��� ���� �����)
		"PROPERTY_CODE" => array(	// ��������
			0 => "URL",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",	// ������������� ��������� ���� ��������
		"SET_LAST_MODIFIED" => "N",	// ������������� � ���������� ������ ����� ����������� ��������
		"SET_META_DESCRIPTION" => "Y",	// ������������� �������� ��������
		"SET_META_KEYWORDS" => "Y",	// ������������� �������� ����� ��������
		"SET_STATUS_404" => "N",	// ������������� ������ 404
		"SET_TITLE" => "N",	// ������������� ��������� ��������
		"SHOW_404" => "N",	// ����� ����������� ��������
		"SORT_BY1" => "SORT",	// ���� ��� ������ ���������� ��������
		"SORT_BY2" => "SORT",	// ���� ��� ������ ���������� ��������
		"SORT_ORDER1" => "ASC",	// ����������� ��� ������ ���������� ��������
		"SORT_ORDER2" => "ASC",	// ����������� ��� ������ ���������� ��������
		"STRICT_SECTION_CHECK" => "N",	// ������� �������� ������� ��� ������ ������
	),
	false
);?><br>
       </div>

       <div class="clear"></div>
    </div>
</div>
<!-- end start small footer -->
<script type="text/javascript"> Cufon.now(); </script>

</body>
</html>