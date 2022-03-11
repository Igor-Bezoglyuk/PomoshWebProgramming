jQuery(document).ready(function(){
$(function (){
	$("#KontentDivKnopka1").click(function(){
	$("#KontentDiv").css("background","red");
 });
    $("#KontentDivKnopka2").click(function(){
	$("#KontentDiv2").css("border","2px solid  black");
 });
    $("#KontentDivKnopka3").click(function(){
	$("#KontentDiv3,#KontentDiv").css("font-weight","900");
 });
});
});