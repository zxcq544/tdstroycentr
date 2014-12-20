<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
$wizTemplateId = COption::GetOptionString("main", "wizard_template_id", "eshop_adapt_horizontal", SITE_ID);
$template =  ($wizTemplateId == "eshop_adapt_vertical") ? "vertical" : "";
?>
<?$APPLICATION->IncludeComponent("bitrix:catalog.viewed.products", "vertical", array(
	"HIDE_NOT_AVAILABLE" => "N",
	"SHOW_DISCOUNT_PERCENT" => "Y",
	"PRODUCT_SUBSCRIPTION" => "N",
	"SHOW_NAME" => "Y",
	"SHOW_IMAGE" => "Y",
	"MESS_BTN_BUY" => "Купить",
	"MESS_BTN_DETAIL" => "Подробнее",
	"MESS_BTN_SUBSCRIBE" => "Подписаться",
	"PAGE_ELEMENT_COUNT" => "2",
	"TEMPLATE_THEME" => "site",
	"DETAIL_URL" => "",
	"SHOW_OLD_PRICE" => "N",
	"PRICE_CODE" => array(
		0 => "BASE",
	),
	"SHOW_PRICE_COUNT" => "1",
	"PRICE_VAT_INCLUDE" => "Y",
	"CONVERT_CURRENCY" => "N",
	"BASKET_URL" => "/personal/cart/",
	"ACTION_VARIABLE" => "action",
	"PRODUCT_ID_VARIABLE" => "id",
	"ADD_PROPERTIES_TO_BASKET" => "Y",
	"PRODUCT_PROPS_VARIABLE" => "prop",
	"PARTIAL_PRODUCT_PROPERTIES" => "N",
	"USE_PRODUCT_QUANTITY" => "N",
	"SHOW_PRODUCTS_2" => "Y",
	"PROPERTY_CODE_2" => array(
		0 => "",
		1 => "",
	),
	"CART_PROPERTIES_2" => array(
		0 => "",
		1 => "",
	),
	"ADDITIONAL_PICT_PROP_2" => "MORE_PHOTO",
	"LABEL_PROP_2" => "-",
	"PROPERTY_CODE_3" => array(
		0 => "",
		1 => "",
	),
	"CART_PROPERTIES_3" => array(
		0 => "",
		1 => "",
	),
	"ADDITIONAL_PICT_PROP_3" => "MORE_PHOTO",
	"OFFER_TREE_PROPS_3" => array(
		0 => "COLOR_REF",
		1 => "SIZES_SHOES",
		2 => "SIZES_CLOTHES",
	),
	"PRODUCT_QUANTITY_VARIABLE" => "quantity"
	),
	false
);?>