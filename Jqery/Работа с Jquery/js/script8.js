jQuery(document).ready(function(){
$(function (){
	$("#Knopkaindex8").click(function(){
	$("tr:even").css("background","grey")
 });
	$("#Knopkaindex82").click(function(){
	$("tr:odd").css("background","blue")
 });
	$("#Knopkaindex83").click(function(){
	$("td:gt(5)").css("color","Yellow")
 });
});
});