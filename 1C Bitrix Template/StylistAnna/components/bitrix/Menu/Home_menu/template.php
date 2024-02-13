<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<?php if (!empty($arResult)): ?><!--Выводит список страниц который ты создал не забудь подключить  код вывода в HTML-->
    
<ul class="Header-Menu">
<?php foreach ($arResult as $item): ?>
    <li class="Menu-li"><a class="Menu-link" href="<?= $item['LINK'] ?>"><?= $item['TEXT'] ?></a></li>
	<?php endforeach; ?>
</ul
<?php endif; ?>