<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
  die(); ?>

<? if (!empty($arResult)): ?>


  <ul class="site-menu js-clone-nav d-none d-lg-block">

    <?
    $previousLevel = 0;

    foreach($arResult as $arItem):?>

      <? if ($arItem["PERMISSION"] === "D") {
          continue;
      }?>

    <?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
      <?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
    <?endif?>
  
    <?if ($arItem["IS_PARENT"]):?>
  
      <?if ($arItem["DEPTH_LEVEL"] == 1):?>
        <li class="has-children"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
          <ul class="dropdown">
      <?else:?>
        <li class="has-children"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
          <ul class="dropdown">
      <?endif?>
  
    <?else:?>

      <?if ($arItem["DEPTH_LEVEL"] == 1):?>
        <li><a href="<?=$arItem["LINK"]?>" class="<?if ($arItem["SELECTED"]):?>active<?endif?>"><?=$arItem["TEXT"]?></a></li>
      <?else:?>
        <li <? if ($arItem["SELECTED"]):?> class="active"<?endif?>><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
      <?endif?>
      
    <?endif?>
  
    <?$previousLevel = $arItem["DEPTH_LEVEL"];?>
  
  <?endforeach?>

            <? if ($previousLevel > 1): //close last item tags?>
              <?= str_repeat("</ul></li>", ($previousLevel - 1)); ?>
            <? endif ?>

          </ul>

        <? endif ?>