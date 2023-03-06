<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Главная страница");
?>

<div class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
        <? $APPLICATION->IncludeComponent(
          "bitrix:main.include",
          "",
          array(
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => "",
            "PATH" => "/include/features/feature_1.php"
          )
        ); ?>
      </div>
      <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
        <? $APPLICATION->IncludeComponent(
          "bitrix:main.include",
          "",
          array(
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => "",
            "PATH" => "/include/features/feature_2.php"
          )
        ); ?>
      </div>
      <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
        <? $APPLICATION->IncludeComponent(
          "bitrix:main.include",
          "",
          array(
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => "",
            "PATH" => "/include/features/feature_3.php"
          )
        ); ?>
      </div>
    </div>
  </div>
</div>


<div class="site-section site-section-sm bg-light">


  <div class="container">

    <? $APPLICATION->IncludeComponent(
      "bitrix:news.line",
      "properties",
      array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "300",
        "CACHE_TYPE" => "A",
        "DETAIL_URL" => "",
        "FIELD_CODE" => array(
          0 => "ID",
          1 => "CODE",
          2 => "NAME",
          3 => "PREVIEW_PICTURE",
          4 => "DETAIL_TEXT",
          5 => "PROPERTY_PRICE",
          6 => "PROPERTY_TOTAL_AREA",
          7 => "PROPERTY_GARAGE",
          8 => "PROPERTY_BATHROOMS",
          9 => "PROPERTY_FLOORS",
        ),
        "IBLOCKS" => array(
          0 => "5",
        ),
        "IBLOCK_TYPE" => "ads",
        "NEWS_COUNT" => "9",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "ASC",
        "SORT_ORDER2" => "ASC",
        "COMPONENT_TEMPLATE" => "properties"
      ),
      false
    ); ?>

  </div>
</div>


<div class="site-section">
  <div class="container">


    <? $APPLICATION->IncludeComponent(
      "bitrix:news.line",
      "services",
      array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "300",
        "CACHE_TYPE" => "A",
        "DETAIL_URL" => "",
        "FIELD_CODE" => array(
          0 => "NAME",
          1 => "PREVIEW_TEXT",
          2 => "DETAIL_TEXT",
          3 => "PROPERTY_LINK",
          4 => "",
        ),
        "IBLOCKS" => array(
          0 => "6",
        ),
        "IBLOCK_TYPE" => "services",
        "NEWS_COUNT" => "9",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "DESC",
        "SORT_ORDER2" => "ASC",
        "COMPONENT_TEMPLATE" => "services"
      ),
      false
    ); ?>

  </div>

</div>
<div class="site-section bg-light">
  <div class="container">

    <? $APPLICATION->IncludeComponent(
	"bitrix:news.line", 
	"blog", 
	array(
		"ACTIVE_DATE_FORMAT" => "f j, Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "300",
		"CACHE_TYPE" => "A",
		"DETAIL_URL" => "",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "PREVIEW_PICTURE",
			3 => "",
		),
		"IBLOCKS" => array(
		),
		"IBLOCK_TYPE" => "news",
		"NEWS_COUNT" => "3",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"COMPONENT_TEMPLATE" => "blog"
	),
	false
); ?>

  </div>

</div>
<p>
</p>
<br>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>