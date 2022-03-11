/* Скрипт фиксирования Меню при скроле*/
$(document).ready(function (){
	        $(window).scroll(function(){
	            if($(this).scrollTop()>85){
	                $('header').addClass('headerFix');/*header id и headerFix слас в одлном теге ,  в стилях  класс пишешь через ::before или  after*/
	            }
	            else if ($(this).scrollTop()<85){
	                $('header').removeClass('headerFix');
	            }
	        });
	    });