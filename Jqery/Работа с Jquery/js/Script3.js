
function addStyle1(){
	$("#body").css("background-image","url('img/1.jpg')");
}
function Anim(){
	$("#Kontent:hidden").show();
}
function Anim2(){
	$("#Kontent2:hidden").showDown("slow");
}
function Anim3(){
	$("#Kontent3:hidden").show().animate({
		fontSize:"36px"
	} , 3000);
}

