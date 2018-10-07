var pp = document.getElementById('jsPrivacy-policy_btn');

function setCookie() {
  var d = new Date();
  d.setTime(d.getTime() + (5000));
  var expires = "expires="+d.toUTCString();
  document.cookie = 'rownowazniepl' + "=" +'privacy policy'+ "," + expires + ",path=/, domain='http://www.rownowaznie.pl/'";
  this.parentElement.classList.add('privacy-policy-hide');
}

if(pp) {
  pp.addEventListener('click', setCookie, false);
}