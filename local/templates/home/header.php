<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

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
<html lang="en">

<head>
    <title><?$APPLICATION->ShowTitle()?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?$APPLICATION->ShowHead();?>
</head>

<body>
<?$APPLICATION->ShowPanel();?>
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

            <?$APPLICATION->IncludeComponent(
	            "bitrix:main.include",
	            "",
	            Array(
		          "AREA_FILE_SHOW" => "file",
		          "AREA_FILE_SUFFIX" => "inc",
		          "EDIT_TEMPLATE" => "",
		          "PATH" => "/include/header/phone.php"
	            )
            );?>
              
              <?$APPLICATION->IncludeComponent(
	              "bitrix:main.include",
	              "",
	              Array(
	              	"AREA_FILE_SHOW" => "file",
	              	"AREA_FILE_SUFFIX" => "inc",
	              	"EDIT_TEMPLATE" => "",
	              	"PATH" => "/include/header/email.php"
	              )
                );?>

            </p>
          </div>
          <div class="col-6 col-md-6 text-right">

              <?$APPLICATION->IncludeComponent(
	              "bitrix:main.include",
	              "",
	              Array(
	              	"AREA_FILE_SHOW" => "file",
	              	"AREA_FILE_SUFFIX" => "inc",
	              	"EDIT_TEMPLATE" => "",
	              	"PATH" => "/include/header/social.php"
	              )
              );?>

          </div>
        </div>
      </div>

    </div>
    <div class="site-navbar">
      <div class="container py-1">
        <div class="row align-items-center">
          <div class="col-8 col-md-8 col-lg-4">
            <h1 class="">

            <?$APPLICATION->IncludeComponent(
	              "bitrix:main.include",
	              "",
	              Array(
	              	"AREA_FILE_SHOW" => "file",
	              	"AREA_FILE_SUFFIX" => "inc",
	              	"EDIT_TEMPLATE" => "",
	              	"PATH" => "/include/header/logo.php"
	              )
              );?>

            </h1>
          </div>
          <div class="col-4 col-md-4 col-lg-8">
            <nav class="site-navigation text-right text-md-right" role="navigation">

              <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#"
                  class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class="active">
                  <a href="index.html">Home</a>
                </li>
                <li class="has-children">
                  <a href="properties.html">Properties</a>
                  <ul class="dropdown">
                    <li><a href="#">Buy</a></li>
                    <li><a href="#">Rent</a></li>
                    <li><a href="#">Lease</a></li>
                    <li class="has-children">
                      <a href="#">Menu</a>
                      <ul class="dropdown">
                        <li><a href="#">Menu One</a></li>
                        <li><a href="#">Menu Two</a></li>
                        <li><a href="#">Menu Three</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
              </ul>
            </nav>
          </div>

          <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	".default", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>

        </div>
      </div>
    </div>
  </div>