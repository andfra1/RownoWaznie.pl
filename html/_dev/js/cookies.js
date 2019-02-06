$(document).ready(function(){
var pp = document.getElementById('jsPrivacy-policy_btn');

function setCookie() {
  var d = new Date();
  d.setDate(d.getDate() + 365);
  var expires = "expires="+d.toUTCString();
  document.cookie = "rownowaznie=privacy policy;" + expires + ";domain=.rownowaznie.pl;path=/";
  this.parentElement.classList.add('privacy-policy-hide');
}

if(pp) {
  pp.addEventListener('click', setCookie, false);
}
});