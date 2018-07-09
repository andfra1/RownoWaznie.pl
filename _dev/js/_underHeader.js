var header = document.getElementById('header');
var underHeader = document.getElementById('underHeader');

window.addEventListener('resize', uhResize, false);

underHeader.style.height = header.offsetHeight + 'px';
function uhResize() {
  underHeader.style.height = header.offsetHeight + 'px';
}