/*jQuery(document).ready(function(){
$(function (){
	$("#Knopkaindex4").click(function(){
	$("#Kontentindex4").animate({
		left:'250px',
		height:'150px',
		width:'150px'
	});
 });
});
});*/ /*Анимация обычная*/

jQuery(document).ready(function(){
$(function (){
	$("#Knopkaindex4").click(function(){
	var div = $("div");
    div.animate({left:'250px',borderRadius: 900},"slow");
    div.animate({top:'550px',borderRadius:0},"slow");
    div.animate({left:'1505px',borderRadius: 900},"slow");
    div.animate({top: '6px',borderRadius: 0},"slow");
 });
});
}); /*Разная анимация для одного обьекта*/