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

<?php if (!empty($arResult['ITEMS'])): ?>
<section id="About">
        <div class="container  pb-5">
		<?php foreach ($arResult['ITEMS'] as $arItem): ?> 
      <?
       $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
       $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));// эта функция php выводит  две кнопки в режиме правки, которые помогут редактировать инфоблоки не заходя в админ панель.
      ?>  	
            <div class="About-block row justify-content-center  pb-5 " id="<?=$this->GetEditAreaId($arItem['ID']);?>">

               <div class="About-blocks p-0 col-xxl-5 col-xl-5 col-lg-6 col-md-8 col-sm-10">
                   <div class="About-blocks-img">
				   <?php if (!empty($arItem['PREVIEW_PICTURE']['SRC'])): ?>	
                       <picture><source srcset="<?=$arItem['PREVIEW_PICTURE']['SRC'];?>" type="image/webp"><img src="<?=SITE_TEMPLATE_PATH?>/img/photo_5190773697739343973_y.jpg" alt="About_img"></picture>
					<?php endif; ?>   
                   </div>
               </div>

               <div class="About-blocks info-About p-5 col-xxl-5 col-xl-5 col-lg-6 col-md-8 col-sm-10">
                 <div class="About-blocks-info">
                  <h3 class="About-blocks-title"><?= isset($arItem['NAME']) ? $arItem['NAME']: '';?></h3>
                  <p class="About-blcks-text"><?= isset($arItem['PREVIEW_TEXT']) ? $arItem['PREVIEW_TEXT']: '';?></p>
                  <?= isset($arItem['DETAIL_TEXT']) ? $arItem['DETAIL_TEXT']: '';?>
                 </div> 
               </div>
            </div>
			<?php endforeach; ?> 
        </div>
   </section>
   <?php endif; ?>
