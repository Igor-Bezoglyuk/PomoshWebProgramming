jQuery(document).ready(function(){
$(function (){
	$("#KontentDivKnopka").click(function(){
	$("#Kontent").toggle();
 });
	$("#KontentDivKnopka2").click(function(){
	$("#Kontent2").fadeIn("show");
	$("#Kontent2").fadeIn(3000);
 });
	$("#KontentDivKnopka3").click(function(){
	$("#Kontent3").fadeToggle("show");
	$("#Kontent3").fadeToggle(3000);
 });
});
});