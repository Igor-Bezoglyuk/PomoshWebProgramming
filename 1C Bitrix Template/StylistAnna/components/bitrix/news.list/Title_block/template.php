<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
?>
<?php if (!empty($arResult['ITEMS'])): ?><!--Проверяет и выводит контент блока-->
<?php foreach ($arResult['ITEMS'] as $arItem): ?> <!--Цикл вывода контента в Html-->
   <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));// эта функция php выводит  две кнопки в режиме правки, которые помогут редактировать инфоблоки не заходя в админ панель.
   ?>
<?php if (!empty($arItem['PREVIEW_PICTURE']['SRC'])): ?>		<!--Выводит изображение Анонса инфоблока через ссылку-->
<section id="Content" style="background: url(<?=$arItem['PREVIEW_PICTURE']['SRC'];?>) no-repeat 100% 15%/68%;">
<?php endif; ?>
      <div class="container-fluid"  id="<?=$this->GetEditAreaId($arItem['ID']);?>"> <!--Айдишник  при наведении на который будет появлятся , кнопки редактирования инфоблоков-->
	    
			<div class="Content-block row justify-content-center align-items-center">
            <div class="Content-blocks col-3">
               <div class="Content-blocks-info">
				  <style>.Content-blocks-info h3::before{ content: '<?= isset($arItem['NAME']) ? $arItem['NAME']: '';?>';}</style><!--Выводит название инфоблока-->
                  <h3 class="Content-info-title"><?= isset($arItem['PREVIEW_TEXT']) ? $arItem['PREVIEW_TEXT']: '';?></h3><!-- Выводит превью - анонс текст инфоблока-->
               </div>
            </div>

            <div class="Content-blocks col-xxl-5 col-xl-5 col-lg-5 col-md-6 col-sm-6">
               <div class="Content-blocks-img">
                  <picture><source srcset="<?=SITE_TEMPLATE_PATH?>/assets/img/Women-profile.webp" type="image/webp"><img src="<?=SITE_TEMPLATE_PATH?>/img/Women-profile.png" alt="Profile_img"></picture>
               </div>
            </div>
         </div>
	           
      </div>
   </section>
   <?php endforeach; ?> 
   <?php endif; ?>