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
    $(".GalleryBlocks").click(function(){
    $(".GalleryModal:hidden").show();
    $(".ModalOkno").html('<img src='+src+' class="popup_img" />');
 });
    $(".close").click(function(){
    $(".GalleryModal").hide();
});
});
});

$(document).ready(function(){
    $('#MenuSilka').click(function(){
       var target = $(this).attr('href');
       $('html, body').animate({scrollTop: $(target).offset().top}, 1000);
       return false;
    });
 });

