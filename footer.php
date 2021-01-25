<!-- workarea -->
					</div>
				</div>
			<?if (CSite::InDir('/index.php')){?>
				
			<?} else {?>

				
<div class="sb_sidebar">
	<!-- Левое меню разделов -->
<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"vertical_mebel", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "left",
		"USE_EXT" => "Y",
		"COMPONENT_TEMPLATE" => "vertical_mebel"
	),
	false
);?>
	<!-- /- end Левое меню разделов -->
<!-- Выводим список последних мероприятий в левом сайтбаре везде кроме раздела Мероприятия -->
<?if($APPLICATION->GetCurDir() !=='/events/'):?>
	<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"events_left", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "PREVIEW_PICTURE",
			3 => "DETAIL_TEXT",
			4 => "DATE_ACTIVE_FROM",
			5 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "7",
		"IBLOCK_TYPE" => "content",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "1",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PROPERTY_CODE" => array(
			0 => "SITY",
			1 => "",
		),
		"COMPONENT_TEMPLATE" => "events_left",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"STRICT_SECTION_CHECK" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "Новости",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N"
	),
	false
);?>
<?endif?>


<!-- 
 Блок с акциями в левой колонке 
-->

	<?$APPLICATION->IncludeComponent(
	"myComp:element.random", 
	"actii_round", 
	array(
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "180",
		"CACHE_TYPE" => "Y",
		"DETAIL_URL" => "#SITE_DIR#/products/#SECTION_ID#/#ID#/",
		"IBLOCKS_PROP" => array(
			0 => "26",
		),
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "products",
		"IMG_HEIGHT" => "108",
		"IMG_WIDTH" => "108",
		"PARENT_SECTION" => "",
		"COMPONENT_TEMPLATE" => "actii_round"
	),
	false
);?>


<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_RECURSIVE" => "Y",
		"AREA_FILE_SHOW" => "sect",
		"AREA_FILE_SUFFIX" => "inc2",
		"EDIT_TEMPLATE" => ""
	)
);?>

<!-- Случайный отзыв выводит при перезагрузке странице-->
<?if($APPLICATION->GetCurDir() !=='/reviews/'):?>
	<?$APPLICATION->IncludeComponent(
	"myComp:element.random", 
	"reviews_left", 
	array(
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "180",
		"CACHE_TYPE" => "Y",
		"DETAIL_URL" => "",
		"IBLOCKS_PROP" => array(
			0 => "24",
		),
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "content",
		"IMG_HEIGHT" => "49",
		"IMG_WIDTH" => "49",
		"PARENT_SECTION" => "",
		"COMPONENT_TEMPLATE" => "reviews_left"
	),
	false
);?>
<?endif?>

		<div class="clearboth"></div>
	</div>
</div>
<?}?>
			<div class="clearboth"></div>
		</div>
	</div>	
		<div class="ft_footer">
			<div class="ft_container">
				<div class="ft_about">
				<!-- Нижнее меню 1 статичное -->
					<h4><?=GetMessage('ABOUT_STORE');?>
					</h4>
						<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"bootom-1", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "bottom",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "bottom",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "bootom-1"
	),
	false
);?>
				</div>
				<!-- end нижнее меню 1 -->

				<!-- Нижнее меню 2 динамический вывод разделов каталога -->
				<div class="ft_catalog">
					<h4><?=GetMessage('PRODUCTS')?></h4>
						<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"bootom-2", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "bottom-2",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "bottom-2",
		"USE_EXT" => "Y",
		"COMPONENT_TEMPLATE" => "bootom-2"
	),
	false
);?>				
				</div>
				<!-- end нижнее меню 2 -->

				<div class="ft_contacts">
					<h4><?=GetMessage('FOOTER_CONTACT_INFO_TITLE');?></h4>
					
					<p class="vcard">
						<span class="adr">
							<span class="street-address">
							<?$APPLICATION->IncludeComponent(
									"bitrix:main.include",
									"",
									Array(
										"AREA_FILE_SHOW" => "file",
										"AREA_FILE_SUFFIX" => "inc",
										"EDIT_TEMPLATE" => ".default",
										"PATH" => "/include/adress.html"
									)
								);?>
								</span>
							</span>
						
						<span class="tel">
						<?$APPLICATION->IncludeComponent(
									"bitrix:main.include",
									"",
									Array(
										"AREA_FILE_SHOW" => "file",
										"AREA_FILE_SUFFIX" => "inc",
										"EDIT_TEMPLATE" => ".default",
										"PATH" => "/include/phone.php"
									)
								);?>
						</span>
						<strong><?=GetMessage('WORK_TIME');?></strong> <br/> 
						
						<span class="workhours"> 
								<?$APPLICATION->IncludeComponent(
									"bitrix:main.include",
									"",
									Array(
										"AREA_FILE_SHOW" => "file",
										"AREA_FILE_SUFFIX" => "inc",
										"EDIT_TEMPLATE" => ".default",
										"PATH" => "include/work_time.php"
									)
								);?>
						</span><br/>
					</p>
						<?$APPLICATION->IncludeComponent(
							"bitrix:main.include",
							"",
							Array(
								"AREA_FILE_SHOW" => "file",
								"AREA_FILE_SUFFIX" => "inc",
								"EDIT_TEMPLATE" => ".default",
								"PATH" => "/include/sotial_service.php"
							)
						);
						?>

					<div class="ft_copyright">
						<?$APPLICATION->IncludeComponent(
							"bitrix:main.include",
							"",
							Array(
								"AREA_FILE_SHOW" => "file",
								"AREA_FILE_SUFFIX" => "inc",
								"EDIT_TEMPLATE" => ".default",
								"PATH" => "/include/copyright_mebel.php"
							)
						);
						?>
					</div>
					
					
				</div>
				
				<div class="clearboth"></div>
			</div>
		</div>
	</div>
	
</body>
</html>