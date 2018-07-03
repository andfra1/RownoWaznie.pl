var burger = document.getElementById('burger');
//var menu = document.getElementById('menu');
var canvas = document.getElementById('canvas');
var offCanvas = document.getElementById('offCanvas');

burger.addEventListener('click', burgerSwitch, false);

function burgerSwitch() {
  if (this.value === "on") {
    this.classList.remove('burger--change');
    //menu.classList.remove('header__menu--show');
    this.value = "off";
    canvas.classList.remove('canvas--off');
    offCanvas.classList.remove('offCanvas--on');
    
  } else if (this.value === "off") {
    this.classList.add('burger--change');
    //menu.classList.add('header__menu--show');
    this.value = "on";
    canvas.classList.add('canvas--off');
    offCanvas.classList.add('offCanvas--on');
  }
}