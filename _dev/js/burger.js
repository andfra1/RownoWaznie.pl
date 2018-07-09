var burger = document.getElementById('burger');
var canvas = document.getElementById('canvas');
var offCanvas = document.getElementById('offCanvas');

burger.addEventListener('click', burgerSwitch, false);
window.addEventListener('resize', burgerOff, false);

function burgerSwitch() {
  if (this.value === "on") {
    burgerOff();
  } else if (this.value === "off") {
    burgerOn();
  }
}

function burgerOff() {
  burger.classList.remove('burger--change');
  canvas.classList.remove('canvas--off');
  offCanvas.classList.remove('offCanvas--on');
  burger.value = "off";
};

function burgerOn() {
  burger.classList.add('burger--change');
  burger.value = "on";
  canvas.classList.add('canvas--off');
  offCanvas.classList.add('offCanvas--on');
};