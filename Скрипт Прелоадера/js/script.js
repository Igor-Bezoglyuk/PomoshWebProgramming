/*Прелоадер скрипт*/

window.onload = function () {
    document.body.classList.add('preloader__row');
    window.setTimeout(function () {
      document.body.classList.add('loaded');
      document.body.classList.remove('preloader__row');
    }, 500);
  }