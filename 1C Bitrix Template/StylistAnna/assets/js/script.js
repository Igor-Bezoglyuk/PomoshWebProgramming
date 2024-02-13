jQuery( document ).ready(function(){
    $(function (){
    $(".Open").click(function(){
    $("#Header-Phone").css("display","block"); 
 });
    $(".Close").click(function(){
    $("#Header-Phone").css("display","none");
});
   $(window).resize(function(){
   $("#Header-Phone").hide();
});
});
});


 $(document).on('submit', '.Contacts-form', function(e) {
   e.preventDefault(); // Prevents the default page reload after form submission
 
   $.ajax({
       type: $(this).prop('method'),
       url: $(this).prop('action'),
       data: $(this).serialize()
   }).done(function() {
       // Do something after it submits
       alert('Сообщение отправлено');
   }).fail(function() {
       // There was an error
       alert('Что то пошло не так !');
   });
 });


 $(document).ready(function(){
   $(".Header-Menu").on("click",".Menusilka", function (event) {
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

$(document).ready(function(){
   $(".Phone-menu").on("click",".Menusilka", function (event) {
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