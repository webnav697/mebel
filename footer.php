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
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "left",
		"USE_EXT" => "Y",
		"COMPONENT_TEMPLATE" => "vertical_mebel"
	),
	false
);?>
	<!-- /- end Левое меню разделов -->

<!--Включаемая область только для раздела,-->
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	"", 
	array(
		"AREA_FILE_RECURSIVE" => "Y",
		"AREA_FILE_SHOW" => "sect",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"COMPONENT_TEMPLATE" => ""
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

<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_RECURSIVE" => "Y",
		"AREA_FILE_SHOW" => "sect",
		"AREA_FILE_SUFFIX" => "inc3",
		"EDIT_TEMPLATE" => ""
	)
);?>
<!-- / end Включаемая область только для раздела  -->
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
					<h4>О магазине</h4>
						<?$APPLICATION->IncludeComponent(
							"bitrix:menu",
							"bootom-1",
							Array(
								"ALLOW_MULTI_SELECT" => "N",
								"CHILD_MENU_TYPE" => "bottom",
								"DELAY" => "N",
								"MAX_LEVEL" => "1",
								"MENU_CACHE_GET_VARS" => array(0=>"",),
								"MENU_CACHE_TIME" => "3600",
								"MENU_CACHE_TYPE" => "N",
								"MENU_CACHE_USE_GROUPS" => "Y",
								"ROOT_MENU_TYPE" => "bottom",
								"USE_EXT" => "N"
							)
						);?>
				</div>
				<div class="ft_catalog">
					<h4>Каталог товаров</h4>
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
								"MENU_CACHE_TYPE" => "N",
								"MENU_CACHE_USE_GROUPS" => "Y",
								"ROOT_MENU_TYPE" => "bottom-2",
								"USE_EXT" => "Y",
								"COMPONENT_TEMPLATE" => "bootom-2"
							),
							false
						);?>
					
				</div>
				<div class="ft_contacts">
					<h4><?=GetMessage('FOOTER_CONTACT_INFO_TITLE');?></h4>
					
					<p class="vcard">
						<span class="adr">
							<span class="street-address">ул. Летняя стр.12, офис 512</span>
						</span>
						<span class="tel">8 (495) 212-85-06</span>
						<strong>Время работы:</strong> <br/> <span class="workhours">ежедневно с 9-00 до 18-00</span><br/>
					</p>
					<ul class="ft_solcial">
						<li><a href="" class="fb"></a></li>
						<li><a href="" class="tw"></a></li>
						<li><a href="" class="ok"></a></li>
						<li><a href="" class="vk"></a></li>
					</ul>
					<div class="ft_copyright">© 2000 - 2012 "Мебельный магазин" </div>
					
					
				</div>
				
				<div class="clearboth"></div>
			</div>
		</div>
	</div>
	
</body>
</html>