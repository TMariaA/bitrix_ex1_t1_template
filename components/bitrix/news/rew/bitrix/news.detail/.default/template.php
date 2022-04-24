<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
$img = SITE_TEMPLATE_PATH . "/img/rew/no_photo.jpg";
if (isset($arResult["DETAIL_PICTURE"]["SRC"])) {
    $img = $arResult["DETAIL_PICTURE"]["SRC"];
};
?>

<div class="review-block">
    <div class="review-text">
        <div class="review-text-cont">
            <?= $arResult["DETAIL_TEXT"]; ?>
        </div>
        <div class="review-autor">
            <?= $arResult["NAME"] ?>, <?= $arResult["DISPLAY_ACTIVE_FROM"] ?><?= GetMessage("YEAR"); ?>
            ., <?= $arResult["DISPLAY_PROPERTIES"]["POSITION"]["VALUE"] ?>
            , <?= $arResult["DISPLAY_PROPERTIES"]["COMPANY"]["VALUE"] ?>.
        </div>
    </div>
    <div style="clear: both;" class="review-img-wrap"><img src="<?= $img ?>"
                                                           alt="img"></div>
</div>

<? if ($arResult["DISPLAY_PROPERTIES"]["FILE"]["DISPLAY_VALUE"] != ""): ?>
    <? if (count($arResult["DISPLAY_PROPERTIES"]["FILE"]["FILE_VALUE"]["SRC"]) == 1): ?>
        <div class="exam-review-doc">
            <p><?= GetMessage("DOC"); ?>:</p></div>
        <div class="exam-review-item-doc"><img class="rew-doc-ico"
                                               src="<?= SITE_TEMPLATE_PATH ?>/img/icons/pdf_ico_40.png">
            <a href="<?= $arResult["DISPLAY_PROPERTIES"]["FILE"]["FILE_VALUE"]["SRC"] ?>"
               download=""> <?= $arResult["DISPLAY_PROPERTIES"]["FILE"]["FILE_VALUE"]["ORIGINAL_NAME"] ?> </a>

        </div>
    <? else: ?>
        <div class="exam-review-doc">
            <p><?= GetMessage("DOC"); ?>:</p></div>
        <? foreach ($arResult["DISPLAY_PROPERTIES"]['FILE']['FILE_VALUE'] as $pid => $arProperty): ?>
            <div class="exam-review-item-doc"><img class="rew-doc-ico"
                                                   src="<?= SITE_TEMPLATE_PATH ?>/img/icons/pdf_ico_40.png">
                <a href="<?= $arProperty['SRC']; ?>" download=""> <?= $arProperty["ORIGINAL_NAME"] ?> </a>
            </div>
        <? endforeach ?>
    <? endif ?>
<? endif ?>
<hr>