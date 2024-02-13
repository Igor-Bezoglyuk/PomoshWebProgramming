<!DOCTYPE html>
<html <? language_attributes(); ?>>
<head>
	<meta charset="<? bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<title>Promo Site</title>
	<?php wp_head(); ?>
</head>
<body>

<header>
	<div class="container-fluid">
	<nav class="heder-block row">
	 <div class="heaer-blocks col">
	 	<h1 class="headericon"><?php bloginfo('name'); ?></h1>
	 </div>

	 <div class="heaer-blocks col">
	 	<span class="Open float-end">&#9776; Mеню</span>
	 	<span class="Open-Mobile float-end">&#9776;</span>
	 </div>		
        
		<ul class="Menu">
			<span class="Close">&#x2715;</span>
			<li class="Menuli"><a class="MenuSilka" href="Home">Главная</a></li>
			<li class="Menuli"><a class="MenuSilka" href="#Kontent2">Новости</a></li>
			<li class="Menuli"><a class="MenuSilka" href="#Kontent4">Элементы</a></li>
		</ul>
	</nav>
	</div>
</header>