/*jQuery (document).ready(function(){
	$(function(){
    $("#knopka").click(function(){
    $("#kontent").append('<div class="s_kl"></div>');
    $("#kontent").append('<div class="t_kl"></div>');
   });
 });
});*/
function addboard(){
	for (var i = 0; i < 8; i++) {
     for (var j=0;j<8;j++){
     	if ((i%2==0 && j%2==0) || (i%2!==0 && j%2!==0)){
           $("#board").append('<div class="s_kl"></div>');
     	}
     	else $("#board").append('<div class="t_kl"></div>');
     }
   }
}