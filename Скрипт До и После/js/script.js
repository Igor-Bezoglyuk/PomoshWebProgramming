/*Скрипт До/После*/

$( document ).ready(function(){
    $(function (){
    $(window).resize(function(){
    $(".Slide_alement").css({'left':'50%'});
    $(".before_block").css({'width':'50%'});
});
});
});

const Before_Aftor = document.querySelector('.Before_Aftor');
const before = document.querySelector('.before_block');
const beforeImage = before.querySelector('img');
const Slide_alement = document.querySelector('.Slide_alement');
const body = document.body;

let isActive = false;

document.addEventListener('DOMContentLoaded', () => {
	let width = Before_Aftor.offsetWidth;
	beforeImage.style.width = `${width}px`;
});

window.onresize = () => {
    let width = Before_Aftor.offsetWidth;
    beforeImage.style.width = `${width}px`;
};

Slide_alement.addEventListener('mousedown', () => {
	isActive = true;
});

body.addEventListener('mouseup', () => {
	isActive = false;
});

body.addEventListener('mouseleave', () => {
	isActive = false;
});

const beforeAfterBefore_Aftor = (x) => {
	let shift = Math.max(0, Math.min(x, Before_Aftor.offsetWidth));
	before.style.width = `${shift}px`;
	Slide_alement.style.left = `${shift}px`;
};

const pauseEvents = (e) => {
	e.stopPropagation();
	e.preventDefault();
	return false;
};

body.addEventListener('mousemove', (e) => {
	if (!isActive) {
		return;
	}

	let x = e.pageX;
	x -= Before_Aftor.getBoundingClientRect().left;
	beforeAfterBefore_Aftor(x);
	pauseEvents(e);
});

Slide_alement.addEventListener('touchstart', () => {
	isActive = true;
});

body.addEventListener('touchend', () => {
	isActive = false;
});

body.addEventListener('touchcancel', () => {
	isActive = false;
});

body.addEventListener('touchmove', (e) => {
	if (!isActive) {
		return;
	}

  let x;
  
  let i;
  for (i = 0; i < e.changedTouches.length; i++) {
  	x = e.changedTouches[i].pageX; 
  }
  
  x -= Before_Aftor.getBoundingClientRect().left;

  beforeAfterBefore_Aftor(x);
  pauseEvents(e);
});
