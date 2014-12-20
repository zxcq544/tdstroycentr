<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
IncludeTemplateLangFile($_SERVER["DOCUMENT_ROOT"] . "/bitrix/templates/" . SITE_TEMPLATE_ID . "/header.php");
$wizTemplateId = COption::GetOptionString("main", "wizard_template_id", "eshop_adapt_horizontal", SITE_ID);
CUtil::InitJSCore();
CJSCore::Init(array("fx"));
$curPage = $APPLICATION->GetCurPage(true);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?= LANGUAGE_ID ?>" lang="<?= LANGUAGE_ID ?>">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">
    <link rel="shortcut icon" type="image/x-icon" href="<?= SITE_DIR ?>/favicon.ico"/>
    <? //$APPLICATION->ShowHead();
    echo '<meta http-equiv="Content-Type" content="text/html; charset=' . LANG_CHARSET . '"' . (true ? ' /' : '') . '>' . "\n";
    $APPLICATION->ShowMeta("robots", false, true);
    $APPLICATION->ShowMeta("keywords", false, true);
    $APPLICATION->ShowMeta("description", false, true);
    $APPLICATION->ShowCSS(true, true);
    ?>
    <link rel="stylesheet" type="text/css"
          href="<?= CUtil::GetAdditionalFileURL(SITE_TEMPLATE_PATH . "/colors.css") ?>"/>
    <?
    $APPLICATION->ShowHeadStrings();
    $APPLICATION->ShowHeadScripts();
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/script.js");
    ?>
    <title><? $APPLICATION->ShowTitle() ?></title>
</head>
<body>
<div id="panel"><? $APPLICATION->ShowPanel(); ?></div>
<? $APPLICATION->IncludeComponent("bitrix:eshop.banner", "", array()); ?>
<div class="wrap" id="bx_eshop_wrap">
    <div class="header_wrap">
        <div class="header_wrap_container">
            <div class="header_inner" itemscope itemtype="http://schema.org/LocalBusiness">
                <? if ($curPage == SITE_DIR . "index.php"): ?><h1 class="site_title"><? endif ?>
                    <a <? if ($curPage != SITE_DIR . "index.php"): ?>class="site_title"<? endif ?>
                       href="<?= SITE_DIR ?>"
                       itemprop="name"><? $APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR . "include/company_name.php"), false); ?></a>
                    <? if ($curPage == SITE_DIR . "index.php"): ?></h1><? endif ?>

                <div class="header_inner_container_one">
                    <div class="phoneDiv inline-block">
                           <span class="phoneSpan">
                               +7 8352
                           </span>
                            <span class="phoneSpanBigger">
                                55-55-55
                            </span>
                        <br/>
                        <a class="zakazatZvonok" href="#">Заказать обратный звонок</a>
                    </div>

                    <div class="raspisanie inline-block">
                        <? $APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR . "include/schedule.php"), false); ?>
                    </div>
                </div>

                <div class="header_top_section_container_one">


                    <? $APPLICATION->IncludeComponent("bitrix:sale.basket.basket.line", "korzinaTop", Array(
                        "PATH_TO_BASKET" => SITE_DIR . "personal/cart/",    // Страница корзины
                        "PATH_TO_PERSONAL" => SITE_DIR . "personal/",    // Персональный раздел
                        "SHOW_PERSONAL_LINK" => "N",    // Отображать персональный раздел
                        "SHOW_NUM_PRODUCTS" => "Y",    // Показывать количество товаров
                        "SHOW_TOTAL_PRICE" => "Y",    // Показывать общую сумму по товарам
                        "SHOW_PRODUCTS" => "N",    // Показывать список товаров
                        "POSITION_FIXED" => "N",    // Отображать корзину поверх шаблона
                    ),
                        false
                    ); ?>

                </div>
            </div>
            <!-- //header_inner -->

            <div class="header_top_section">

                <div class="header_top_section_container_two">
                    <? $APPLICATION->IncludeComponent('bitrix:menu', "top_menu", array(
                            "ROOT_MENU_TYPE" => "top",
                            "MENU_CACHE_TYPE" => "Y",
                            "MENU_CACHE_TIME" => "36000000",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "MENU_CACHE_GET_VARS" => array(),
                            "MAX_LEVEL" => "1",
                            "USE_EXT" => "N",
                            "ALLOW_MULTI_SELECT" => "N"
                        )
                    ); ?>
                </div>
                <div class="clb"></div>
            </div>
            <!-- //header_top_section -->

            <div class="header_inner_container_two">
                <? $APPLICATION->IncludeComponent("bitrix:search.title", "anisimovSearch", Array(
                    "NUM_CATEGORIES" => "1",    // Количество категорий поиска
                    "TOP_COUNT" => "5",    // Количество результатов в каждой категории
                    "CHECK_DATES" => "N",    // Искать только в активных по дате документах
                    "SHOW_OTHERS" => "N",    // Показывать категорию "прочее"
                    "PAGE" => SITE_DIR . "catalog/",    // Страница выдачи результатов поиска (доступен макрос #SITE_DIR#)
                    "CATEGORY_0_TITLE" => GetMessage("SEARCH_GOODS"),    // Название категории
                    "CATEGORY_0" => array(    // Ограничение области поиска
                        0 => "iblock_catalog",
                    ),
                    "CATEGORY_0_iblock_catalog" => array(    // Искать в информационных блоках типа "iblock_catalog"
                        0 => "all",
                    ),
                    "CATEGORY_OTHERS_TITLE" => GetMessage("SEARCH_OTHER"),
                    "SHOW_INPUT" => "Y",    // Показывать форму ввода поискового запроса
                    "INPUT_ID" => "title-search-input",    // ID строки ввода поискового запроса
                    "CONTAINER_ID" => "search",    // ID контейнера, по ширине которого будут выводиться результаты
                    "PRICE_CODE" => array(    // Тип цены
                        0 => "BASE",
                    ),
                    "SHOW_PREVIEW" => "Y",    // Показать картинку
                    "PREVIEW_WIDTH" => "75",    // Ширина картинки
                    "PREVIEW_HEIGHT" => "75",    // Высота картинки
                    "CONVERT_CURRENCY" => "Y",    // Показывать цены в одной валюте
                ),
                    false
                ); ?>
            </div>


            <? if ($APPLICATION->GetCurPage(true) == SITE_DIR . "index.php"): ?>
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "sect",
                        "AREA_FILE_SUFFIX" => "inc",
                        "AREA_FILE_RECURSIVE" => "N",
                        "EDIT_MODE" => "html",
                    ),
                    false,
                    Array('HIDE_ICONS' => 'Y')
                ); ?>
            <? endif ?>

        </div>
        <!-- //header_wrap_container -->
    </div>
    <!-- //header_wrap -->

    <div class="workarea_wrap">
        <div
            class="worakarea_wrap_container workarea <? if ($wizTemplateId == "eshop_adapt_vertical"): ?>grid1x3<? else: ?>grid<? endif ?>">
            <div id="navigation">
                <? $APPLICATION->IncludeComponent("bitrix:breadcrumb", "", array(
                    "START_FROM" => "0",
                    "PATH" => "",
                    "SITE_ID" => "-"
                ),
                    false,
                    Array('HIDE_ICONS' => 'Y')
                ); ?>
            </div>
            <div class="bx_content_section">
                <? if ($curPage != SITE_DIR . "index.php"): ?>
                    <h1><?= $APPLICATION->ShowTitle(false); ?></h1>
                <? endif ?>
