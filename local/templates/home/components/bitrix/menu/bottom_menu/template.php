<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<? if (!empty($arResult)) : ?>


<div class="row mb-5">
  <div class="col-md-12">
    <h3 class="footer-heading mb-4"><?=GetMessage("BOTTOM_MENU_TITLE")?></h3>
  </div>
  <div class="col-md-6 col-lg-6">
    <ul class="list-unstyled">
    <? foreach ($arResult as $arItem) : ?>
      <li>
        <a href="<?= $arItem['LINK'] ?>"><?= $arItem['TEXT'] ?></a>
      </li>
    <? endforeach ?>
    </ul>
<? endif ?>
  </div>
</div>