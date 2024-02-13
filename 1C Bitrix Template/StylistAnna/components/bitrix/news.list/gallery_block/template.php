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
<section id="Gallery">
      <div class="container-fluid p-0">
         <div class="Gallery-block row justify-content-center m-0 pt-1 pb-1">
		 <?php foreach ($arResult['ITEMS'] as $arItem): ?>
              <div class="Gallery-blocks col-3">
                 <div class="Galllery-blocks-img G-img-1" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
				 <?php if (!empty($arItem['PREVIEW_PICTURE']['SRC'])): ?>		
                  <picture><source srcset="<?=$arItem['PREVIEW_PICTURE']['SRC'];?>" type="image/webp"><img class="Gallery-img-1" src="<?=SITE_TEMPLATE_PATH?>/img/photo_5190773697739343956_y.jpg" alt="Gallery_img"></picture>
				 <?php endif; ?>
                 </div>
              </div>
		 <?php endforeach; ?> 
         </div>
      </div>

      <div class="Gallery-modal">
         <div class="Gallery-modal-window ">
            <span class="Gallery-close">⛌</span>
            <div class="Galleery-modal-img">
                
            </div>
         </div>
      </div>

      <div class="Gallery-link-block row pt-4 pb-4">
          <div class="Gallery-blocks-link">
              <a class="Gallery-link" href="https://instagram.com/your_stylist_foralloccasions?igshid=YmMyMTA2M2Y="><button class="Gallery-btn btn"><picture><source srcset="<?=SITE_TEMPLATE_PATH?>/assets/img/Gallery-link-icon-white.webp" type="image/webp"><img class="Gallery-img-link-white" src="<?=SITE_TEMPLATE_PATH?>/img/Gallery-link-icon-white.png" alt="gallery_link_icon"></picture> Подробнее..</button></a>
          </div>
      </div>
   </section>
   <?php endif; ?>

<script>   //php функции не работают вне php файла. Поэтому следует добавлять скрипты с php в главный файл php.
   jQuery(document).ready(function(){
      $(function (){
         <?php if (!empty($arResult['ITEMS'])): ?>
            <?php foreach ($arResult['ITEMS'] as $arItem): ?>     
          $("#<?=$this->GetEditAreaId($arItem['ID']);?>").click(function(){
          $(".Gallery-modal:hidden").show()
          $(".Galleery-modal-img").html('<?php if (!empty($arItem['PREVIEW_PICTURE']['SRC'])): ?><img src="<?=$arItem['PREVIEW_PICTURE']['SRC'];?>" alt="Galery_imgs"><?php endif; ?>');
       });
       <?php endforeach; ?> 
       <?php endif; ?> 

          $(".Gallery-close").click(function(){
          $(".Gallery-modal").hide();
       });
      });
      });
</script>