jQuery( document ).ready(function(){
    $(function (){
    $(".Open").click(function(){
    $(".Menu").animate({'width': 'toggle'}); /*Скрипт по открытию и закрытию Phone Menu слева на право */
 });
    $(".Open-Mobile").click(function(){
    $(".Menu").animate({'width': 'toggle'});
 });
    $(".Close").click(function(){
    $(".Menu").animate({'width': 'toggle'});
});
    $(".Kontent2BlocksKnopka").click(function(){
    $(".Kontent2Modal:hidden").show();
 });
    $(".Kontent2-Close").click(function(){
    $(".Kontent2Modal").hide();
});
});
});

/* Прокрутка по нажатию на кнопку*/
$(document).ready(function(){
    $('#MenuSilka').click(function(){
       var target = $(this).attr('href');
       $('html, body').animate({scrollTop: $(target).offset().top}, 1000);
       return false;
    });
 });

$(document).ready(function(){
    $("#Menu").on("click","#MenuSilka", function (event) {
        //отменяем стандартную обработку нажатия по ссылке
        event.preventDefault();
 
        //забираем идентификатор бока с атрибута href
        var id  = $(this).attr('href'),
 
        //узнаем высоту от начала страницы до блока на который ссылается якорь
            top = $(id).offset().top;
         
        //анимируем переход на расстояние - top за 1500 мс
        $('body,html').animate({scrollTop: top}, 1500);
    });
});