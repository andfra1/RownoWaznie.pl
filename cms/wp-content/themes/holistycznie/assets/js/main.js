var _extends=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var n=arguments[t];for(var r in n)Object.prototype.hasOwnProperty.call(n,r)&&(e[r]=n[r])}return e},_typeof="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e};!function(e,t){"object"===("undefined"==typeof exports?"undefined":_typeof(exports))&&"undefined"!=typeof module?module.exports=t():"function"==typeof define&&define.amd?define(t):e.LazyLoad=t()}(this,function(){"use strict";function e(e){return e.filter(function(e){return!a(e)})}function t(e,t,n){!n&&a(e)||(O(t.callback_enter,e),L.indexOf(e.tagName)>-1&&(A(e,t),E(e,t.class_loading)),w(e,t),i(e),O(t.callback_set,e))}var n={elements_selector:"img",container:document,threshold:300,data_src:"src",data_srcset:"srcset",data_sizes:"sizes",class_loading:"loading",class_loaded:"loaded",class_error:"error",load_delay:0,callback_load:null,callback_error:null,callback_set:null,callback_enter:null,to_webp:!1},r=function(e){return _extends({},n,e)},o=function(e,t){return e.getAttribute("data-"+t)},s=function(e,t,n){var r="data-"+t;null!==n?e.setAttribute(r,n):e.removeAttribute(r)},i=function(e){return s(e,"was-processed","true")},a=function(e){return"true"===o(e,"was-processed")},c=function(e,t){return s(e,"ll-timeout",t)},l=function(e){return o(e,"ll-timeout")},u=function(e,t){var n,r=new e(t);try{n=new CustomEvent("LazyLoad::Initialized",{detail:{instance:r}})}catch(e){(n=document.createEvent("CustomEvent")).initCustomEvent("LazyLoad::Initialized",!1,!1,{instance:r})}window.dispatchEvent(n)},d=function(e,t){return t?e.replace(/\.(jpe?g|png)/gi,".webp"):e},f="undefined"!=typeof window,_=f&&!("onscroll"in window)||/(gle|ing|ro)bot|crawl|spider/i.test(navigator.userAgent),v=f&&"IntersectionObserver"in window,m=f&&"classList"in document.createElement("p"),h=f&&function(){var e=document.createElement("canvas");return!(!e.getContext||!e.getContext("2d"))&&0===e.toDataURL("image/webp").indexOf("data:image/webp")}(),b=function(e,t,n,r){for(var s,i=0;s=e.children[i];i+=1)if("SOURCE"===s.tagName){var a=o(s,n);p(s,t,a,r)}},p=function(e,t,n,r){n&&e.setAttribute(t,d(n,r))},g=function(e,t){var n=h&&t.to_webp,r=o(e,t.data_src);if(r){var s=d(r,n);e.style.backgroundImage='url("'+s+'")'}},y={IMG:function(e,t){var n=h&&t.to_webp,r=t.data_srcset,s=e.parentNode;s&&"PICTURE"===s.tagName&&b(s,"srcset",r,n);var i=o(e,t.data_sizes);p(e,"sizes",i);var a=o(e,r);p(e,"srcset",a,n);var c=o(e,t.data_src);p(e,"src",c,n)},IFRAME:function(e,t){var n=o(e,t.data_src);p(e,"src",n)},VIDEO:function(e,t){var n=t.data_src,r=o(e,n);b(e,"src",n),p(e,"src",r),e.load()}},w=function(e,t){var n=e.tagName,r=y[n];r?r(e,t):g(e,t)},E=function(e,t){m?e.classList.add(t):e.className+=(e.className?" ":"")+t},I=function(e,t){m?e.classList.remove(t):e.className=e.className.replace(new RegExp("(^|\\s+)"+t+"(\\s+|$)")," ").replace(/^\s+/,"").replace(/\s+$/,"")},L=["IMG","IFRAME","VIDEO"],O=function(e,t){e&&e(t)},x=function(e,t,n){e.removeEventListener("load",t),e.removeEventListener("error",n)},A=function(e,t){var n=function n(o){z(o,!0,t),x(e,n,r)},r=function r(o){z(o,!1,t),x(e,n,r)};e.addEventListener("load",n),e.addEventListener("error",r)},z=function(e,t,n){var r=e.target;I(r,n.class_loading),E(r,t?n.class_loaded:n.class_error),O(t?n.callback_load:n.callback_error,r)},k=function(e,n,r){t(e,r),n.unobserve(e)},N=function(e){var t=l(e);t&&(clearTimeout(t),c(e,null))},C=function(e,t,n){var r=n.load_delay,o=l(e);o||(o=setTimeout(function(){k(e,t,n),N(e)},r),c(e,o))},R=function(e){return e.isIntersecting||e.intersectionRatio>0},S=function(e){return{root:e.container===document?null:e.container,rootMargin:e.threshold+"px",threshold:0}},M=function(e,t){this._settings=r(e),this._setObserver(),this.update(t)};return M.prototype={_manageIntersection:function(e){var t=this._observer,n=this._settings,r=this._settings.load_delay,o=e.target;R(e)&&(r?C(o,t,n):k(o,t,n)),R(e)||N(o)},_onIntersection:function(t){t.forEach(this._manageIntersection.bind(this)),this._elements=e(this._elements)},_setObserver:function(){v&&(this._observer=new IntersectionObserver(this._onIntersection.bind(this),S(this._settings)))},loadAll:function(){var t=this;this._elements.forEach(function(e){t.load(e)}),this._elements=e(this._elements)},update:function(t){var n=this,r=this._settings,o=t||r.container.querySelectorAll(r.elements_selector);this._elements=e(Array.prototype.slice.call(o)),!_&&this._observer?this._elements.forEach(function(e){n._observer.observe(e)}):this.loadAll()},destroy:function(){var t=this;this._observer&&(e(this._elements).forEach(function(e){t._observer.unobserve(e)}),this._observer=null),this._elements=null,this._settings=null},load:function(e,n){t(e,this._settings,n)}},f&&function(e,t){if(t)if(t.length)for(var n,r=0;n=t[r];r+=1)u(e,n);else u(e,t)}(M,window.lazyLoadOptions),M});
var myLazyLoad = new LazyLoad({
    elements_selector: ".lazy"
});
var owlSettings = {
  center: false,
  items: 2,
  loop: true,
  margin: 20,
  autoplay: true,
  autoplayTimeout: 3000,
  autoplayHoverPause: false,
  nav: true,
  navContainer: '#slider-articles',
  navText: '',
  dots: false,
  autoplayHoverPause: true,
  responsive: {
    // breakpoint from ... up
    650: {
      items: 3
    },
    1000: {
      items: 4
    }
  }
};

$('#slider-articles').owlCarousel(owlSettings);

$(window).on('resize', function() {
  if (window.innerWidth <= 500) {
    $('#slider-articles').trigger('remove.owl.carousel')
  } else {
    $('#slider-articles').trigger('refresh.owl.carousel')
  }
})
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
//skopiowano z https://www.w3schools.com/howto/howto_custom_select.asp
$(window).ready(function(){
var x, i, j, selElmnt, a, b, c;

x = document.getElementsByClassName("custom-select");
for (i = 0; i < x.length; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < selElmnt.length; j++) {
    
    c = document.createElement("A");
    c.setAttribute('href', selElmnt.options[j].value);
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        var y, i, k, s, h;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        h = this.parentNode.previousSibling;
        for (i = 0; i < s.length; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            for (k = 0; k < y.length; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
  });
}
function closeAllSelect(elmnt) {
  var x, y, i, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  for (i = 0; i < y.length; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < x.length; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}

document.addEventListener("click", closeAllSelect);
});