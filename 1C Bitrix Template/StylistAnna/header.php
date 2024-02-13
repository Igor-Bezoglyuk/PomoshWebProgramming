<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?> <!--блокурует открытие файла header.php на премую через браузер-->

<!DOCTYPE html>
<html lang="en">
<head>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <?$APPLICATION->ShowHead();?> <!--Подключает head к шаблону включая теги с атребутами utf8 -->

    <?
     use Bitrix\Main\Page\Asset; //включает функцию при помощи которой ты подключаешь стили, скрипты,шрифты и.т.д.

     Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/script.js"); //подключает скрипты по пути к файлу /js через  функцию SITE_TEMPLATE_PATH
     Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/components/bitrix/news.list/gallery_block/template.php");
     Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/style.css");// подключает стили  по пути к файлу /css через  функцию SITE_TEMPLATE_PATH
     Asset::getInstance()->addString("<link href='https://fonts.googleapis.com/css2?family=Bad+Script&display=swap' rel='stylesheet'>","<link href='https://fonts.googleapis.com/css2?family=Pacifico&display=swap' rel='stylesheet'> "); 
     Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1.0">'); // подключает  всё остальере , ссылки на шрифты,на скрипты,   по сети  через атрибут src без функции  SITE_TEMPLATE_PATH
     Asset::getInstance()->addString('<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>'); 
    ?>
   <link  rel="shortcut icon" type="image/png" href="img/Icon-site-style.png">
   <title><?$APPLICATION->ShowTitle()?>Stylist Anna Lekhmus</title>
</head>
<body>

<div id="panel">
<?$APPLICATION->ShowPanel();?> <!-- Подключает к шаблону панель администратора битрикс с верху -->
</div>

   <header>

      <div class="Header-top">
      <div class="container ps-0 pe-0">
         <div class="Header-top-block row justify-content-between align-items-center text-center">
            <div class="Header-top-blocks col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4">
               <a class="Header-top-phone" href="tel:+79147253940">8-914-725-39-40</a>
            </div>

            <div class="Header-top-blocks-row col-3">
               <div class="Header-top-blocks-info">
                  <a class="Header-top-Soc-links" href="https://t.me/+79147253940"><picture><source srcset="<?=SITE_TEMPLATE_PATH //подключает всё, по пути к файлу нужно вводить в атрибуты src="" ?>/assets/img/icon-top-telegram.webp" type="image/webp"><img src="<?=SITE_TEMPLATE_PATH?>/img/icon-top-telegram.png" alt=""></picture></a>
                  <a class="Header-top-Soc-links" href="https://wa.me/+79147253940"><picture><source srcset="<?=SITE_TEMPLATE_PATH?>/assets/img/icon-top-whatsapp.webp" type="image/webp"><img src="<?=SITE_TEMPLATE_PATH?>/img/icon-top-whatsapp.png" alt=""></picture></a>
                  <a class="Header-top-Soc-links" href="https://instagram.com/your_stylist_foralloccasions?igshid=YmMyMTA2M2Y="><picture><source srcset="<?=SITE_TEMPLATE_PATH?>/assets/img/Icon-instagram-white.webp" type="image/webp"><img src="<?=SITE_TEMPLATE_PATH?>/img/Icon-instagram-white.png" alt=""></picture></a>
               </div>
            </div>
         </div>
      </div>
      </div>

      <div class="container-fluid">
         <nav class="Header-block row justify-content-between align-items-center">

            <div class="Header-blocks col-3">
               <div class="Header-blocks-img">
                  <a href="/"><picture><source srcset="<?=SITE_TEMPLATE_PATH?>/assets/img/L.webp" type="image/webp"><img src="<?=SITE_TEMPLATE_PATH?>/img/L.png" alt="Logo"></picture></a>
               </div>
            </div>

            <div class="Header-blocks Header-blocks-hidden col-xxl-5 col-xl-6 col-lg-7 col-md-8 col-sm-9">
               
            <?$APPLICATION->IncludeComponent(//Выводит меню  , код вставляется за место меню 
	             "bitrix:menu", 
	             "Home_menu", 
	             array(
		             "ALLOW_MULTI_SELECT" => "N",
		             "DELAY" => "N",
		             "MAX_LEVEL" => "1",
		             "MENU_CACHE_GET_VARS" => array(
		             ),
		             "MENU_CACHE_TIME" => "3600",
		             "MENU_CACHE_TYPE" => "N",
		             "MENU_CACHE_USE_GROUPS" => "Y",
		             "ROOT_MENU_TYPE" => "MainMenu",
		             "USE_EXT" => "N",
		             "COMPONENT_TEMPLATE" => "Home_menu",
		             "CHILD_MENU_TYPE" => "left"
	             ),
	             false
            );?>

            </div>
            
            <div class="Header-blocks-open col-3">
               <span class="Open">☰</span>
            </div>

         </nav>
         
         <div id="Header-Phone">
           <div class="container-fluid header-phone-color">
           <div class="header-phone-block row justify-content-between align-items-center ps-0">    
             <div class="header-phone-blocks col-2">
               <div class="Header-phone-blocks-img">
                  <picture><source srcset="<?=SITE_TEMPLATE_PATH?>/assets/img/L.webp" type="image/webp"><img src="<?=SITE_TEMPLATE_PATH?>/img/L.png" alt="Logo"></picture>
               </div>
             </div>
             
             <div class="header-phone-blocks-close ">
               <span class="Close">⛌</span>
             </div>
           </div>
         </div>

           <div class="header-phone-info row flex-column align-content-end text-end">
            <div class="Header-phone-blocks col-5">
              <ul class="Phone-menu">
               <li><a href="#Content">Главная</a></li>
               <li><a href="#About">Обо мне</a></li>
               <li><a href="#Prise">Прайс</a></li>
               <li><a href="#Serveses">Услуги</a></li>
               <li><a href="#Contacts">Контакты</a></li>
              </ul>
            </div>

              <div class="Header-phone-blocks col-5 mt-5">
               <div class="Header-phone-blocks-info">
                  <a class="Header-phone-nomber" href="tel:+79147253940">8-914-725-39-40</a>
               </div>
               <div class="Header-phone-blocks-soc-links">
                  <a class="Header-phone-Soc-links" href="https://t.me/+79147253940"><picture><source srcset="<?=SITE_TEMPLATE_PATH?>/assets/img/icon-top-telegram.webp" type="image/webp"><img src="<?=SITE_TEMPLATE_PATH?>/img/icon-top-telegram.png" alt=""></picture></a>
                  <a class="Header-phone-Soc-links" href="https://wa.me/+79147253940"><picture><source srcset="<?=SITE_TEMPLATE_PATH?>/assets/img/icon-top-whatsapp.webp" type="image/webp"><img src="<?=SITE_TEMPLATE_PATH?>/img/icon-top-whatsapp.png" alt=""></picture></a>
                  <a class="Header-phone-Soc-links" href="https://instagram.com/your_stylist_foralloccasions?igshid=YmMyMTA2M2Y="><picture><source srcset="<?=SITE_TEMPLATE_PATH?>/assets/img/Icon-instagram-white.webp" type="image/webp"><img src="<?=SITE_TEMPLATE_PATH?>/img/Icon-instagram-white.png" alt=""></picture></a>
               </div>
              </div>

           </div>
         </div>

      </div>
   
   </header>