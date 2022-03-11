
jQuery( document ).scroll(function(){
    if($(document).scrollTop()> $('header').height()+ 5)/* Проверка  если  мы проскролим меньше 5 пикселей вниз  то   меню фиксируется*/
    $("header").addClass('fixed');/* addClass миняет  класс со стилями или дополняет, RemoveClass удаляет класс если мы не скролим в низ*/
   else
    $("header").removeClass('fixed'); /*В СSS создайте  элемент с класом .fixed там пишите  прозрачность и позицию fised*/
 });