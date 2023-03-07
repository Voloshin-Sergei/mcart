<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
  die();

IncludeTemplateLangFile(__FILE__);

use Bitrix\Main\Page\Asset;

$asset = Asset::getInstance();

$asset->addString('<link rel="stylesheet"
href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">');

$asset->addCss(SITE_TEMPLATE_PATH . "/fonts/icomoon/style.css");
$asset->addCss(SITE_TEMPLATE_PATH . "/css/bootstrap.min.css");
$asset->addCss(SITE_TEMPLATE_PATH . "/css/magnific-popup.css");
$asset->addCss(SITE_TEMPLATE_PATH . "/css/jquery-ui.css");
$asset->addCss(SITE_TEMPLATE_PATH . "/css/owl.carousel.min.css");
$asset->addCss(SITE_TEMPLATE_PATH . "/css/owl.theme.default.min.css");
$asset->addCss(SITE_TEMPLATE_PATH . "/css/bootstrap-datepicker.css");
$asset->addCss(SITE_TEMPLATE_PATH . "/css/mediaelementplayer.css");
$asset->addCss(SITE_TEMPLATE_PATH . "/css/animate.css");
$asset->addCss(SITE_TEMPLATE_PATH . "/fonts/flaticon/font/flaticon.css");
$asset->addCss(SITE_TEMPLATE_PATH . "/css/fl-bigmug-line.css");
$asset->addCss(SITE_TEMPLATE_PATH . "/css/aos.css");
$asset->addCss(SITE_TEMPLATE_PATH . "/template_styles.css");

$asset->addJs(SITE_TEMPLATE_PATH . "/js/jquery-3.3.1.min.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/js/jquery-migrate-3.0.1.min.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/js/jquery-ui.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/js/jquery-ui.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/js/popper.min.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/js/bootstrap.min.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/js/owl.carousel.min.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/js/mediaelement-and-player.min.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/js/jquery.stellar.min.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/js/jquery.countdown.min.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/js/jquery.magnific-popup.min.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/js/bootstrap-datepicker.min.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/js/aos.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/js/main.js");
?>

<!DOCTYPE html>
<html lang="<?= LANGUAGE_ID ?>">

<head>
  <title>
    <? $APPLICATION->ShowTitle() ?>
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <? $APPLICATION->ShowHead(); ?>
</head>

<body>
  <? $APPLICATION->ShowPanel(); ?>
  <div class="site-loader"></div>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <div class="border-bottom bg-white top-bar">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 col-md-6">
            <p class="mb-0">

              <? $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                array(
                  "AREA_FILE_SHOW" => "file",
                  "AREA_FILE_SUFFIX" => "inc",
                  "EDIT_TEMPLATE" => "",
                  "PATH" => "/include/header/phone.php"
                )
              ); ?>

              <? $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                array(
                  "AREA_FILE_SHOW" => "file",
                  "AREA_FILE_SUFFIX" => "inc",
                  "EDIT_TEMPLATE" => "",
                  "PATH" => "/include/header/email.php"
                )
              ); ?>

            </p>
          </div>
          <div class="col-6 col-md-6 text-right">

            <? $APPLICATION->IncludeComponent(
              "bitrix:main.include",
              "",
              array(
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/include/header/social.php"
              )
            ); ?>

          </div>
        </div>
      </div>

    </div>
    <div class="site-navbar">
      <div class="container py-1">
        <div class="row align-items-center">
          <div class="col-8 col-md-8 col-lg-4">
            <h1 class="">

              <? $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                array(
                  "AREA_FILE_SHOW" => "file",
                  "AREA_FILE_SUFFIX" => "inc",
                  "EDIT_TEMPLATE" => "",
                  "PATH" => "/include/header/logo.php"
                )
              ); ?>

            </h1>
          </div>

          <div class="col-4 col-md-4 col-lg-8">

            <nav class="site-navigation text-right text-md-right" role="navigation">
              <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3">
                <a href="#" class="site-menu-toggle js-menu-toggle text-black">
                  <span class="icon-menu h3"></span>
                </a>
              </div>

              <? $APPLICATION->IncludeComponent(
                "bitrix:menu",
                "top_multi",
                array(
                  "ALLOW_MULTI_SELECT" => "N",
                  "CHILD_MENU_TYPE" => "left",
                  "DELAY" => "N",
                  "MAX_LEVEL" => "3",
                  "MENU_CACHE_GET_VARS" => array(
                    0 => "",
                  ),
                  "MENU_CACHE_TIME" => "3600",
                  "MENU_CACHE_TYPE" => "N",
                  "MENU_CACHE_USE_GROUPS" => "Y",
                  "ROOT_MENU_TYPE" => "top",
                  "USE_EXT" => "N",
                ),
                false
              ); ?>

            </nav>



          </div>
        </div>
      </div>
    </div>

    <? $GLOBALS['preferred'] = ['!PROPERTY_PREFERRED_DEAL' => false]; ?>
    <? $APPLICATION->IncludeComponent(
      "bitrix:news.list",
      "slider",
      array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "Y",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "N",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "DISPLAY_DATE" => "N",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "N",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array(
          0 => "",
          1 => "",
        ),
        "FILTER_NAME" => "preferred",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "5",
        "IBLOCK_TYPE" => "ads",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
        "INCLUDE_SUBSECTIONS" => "Y",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "20",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Главная страница",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array(
          0 => "PRICE",
          1 => "",
        ),
        "SET_BROWSER_TITLE" => "Y",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "Y",
        "SET_META_KEYWORDS" => "Y",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "Y",
        "SHOW_404" => "N",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "DESC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "N",
        "COMPONENT_TEMPLATE" => "slider"
      ),
      false
    ); ?>

  </div>