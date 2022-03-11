/*jQuery(document).ready(function(){
$(function (){
	$("#Knopkaindex10").click(function(){
	alert("Text:"+ $("strong").text());
 });
	$("#Knopkaindex102").click(function(){
	alert("HTML:"+ $("<strong>Не бросайте рабочие корабли!</strong>").html());
 });
	$("#Knopkaindex103").click(function(){
	alert("Value:"+ $("#Textinput").val());
 });
});
});
*/
jQuery(document).ready(function(){
$(function (){
	$("#Knopkaindex10").click(function(){
	$("#blockindex10").text("Не бросайте рабочие корабли!");
 });
	$("#Knopkaindex102").click(function(){
	$("#blockindex10").html("<div>Не бросайте рабочие корабли!</div>");
 });
	$("#Knopkaindex103").click(function(){
	$("#Textinput").val(value);
 });
});
});