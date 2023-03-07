<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
  die();

//delayed function must return a string
if (empty($arResult))
  return "";

$strReturn = '<div>';

for ($index = 0, $itemSize = count($arResult); $index < $itemSize; $index++) {

  if ($index > 0) {
    $strReturn .= '<span class="mx-2 text-white">&bullet;</span> ';
  }

  $title = htmlspecialcharsex($arResult[$index]["TITLE"]);

  if ($arResult[$index]["LINK"] <> "" && $index != $itemSize - 1) {
    $strReturn .= '<a href="' . $arResult[$index]["LINK"] . '" title="' . $title . '" ">' . $title . '</a>';

  } else {
    $strReturn .= '<strong class="text-white">' . $title . '</strong>';
  }
}

$strReturn .= '</div>';

return $strReturn;
?>