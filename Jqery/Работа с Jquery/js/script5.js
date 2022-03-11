jQuery(document).ready(function(){
$(function (){
	$("#Kontentimg").dblclick(function(){
	$(this).hide();
 });
	$("#Kontentimg2").click(function(){
	$(this).hide();
 });
	$("#Knopka").mousedown(function(){
	alert("Ты нажал на кнопку и отпустил");
 });
	$("#Knopka2").hover(function(){
	alert("Ты Навёл на кнопку");
},
   function(){
   alert("Вы отвели курсор от кнопки");
 });
	$("#Text").focus(function(){
    $(this).css("background-color","yellow");
 });
	$("#Text2").blur(function(){
    $(this).css("background-color","blue");
 });
	$("#Kontent,#Kontent2,#Kontent3").on({
	moseenter:function(){
		$(this).fadeOut("slow");
	}
});
});
});

