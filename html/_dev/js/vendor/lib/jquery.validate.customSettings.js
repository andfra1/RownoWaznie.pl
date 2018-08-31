$().ready(function () {
  $.validator.addMethod("ipAddressFormat", function (value, element) {
    theName = "IPaddress";
    var ipPattern = /^(\d{1,3})\.(\d{1,3})\.(\d{1,3})\.(\d{1,3})$/;
    var ipArray = value.match(ipPattern);
    if (ipArray == null)
      return false;
    else {
      for (i = 0; i < 4; i++) {
        thisSegment = ipArray[i];
        if (thisSegment > 254) {
          return false;
        }
        if ((i == 0) && (thisSegment > 254)) {
          return false;
        }
      }
    }
    return true;
  }, "Invalid IP Address");

  $.validator.addMethod("lettersonly", function (value, element) {
    return this.optional(element) || /^[a-z]+$/i.test(value);
  }, "Letters only please");


  var validator = $('#form').validate({
    ignore: '.sslChoice',

    highlight: function (element, errorClass) {
      $(element).parent().parent().addClass('error').removeClass('valid');
    },
    unhighlight: function (element, validClass) {
      $(element).parent().parent().addClass('valid').removeClass('error');
    },
    errorPlacement: function (error, element) {
      //errorClass.appendTo(element.parent(".box"));
      error.appendTo(element.parent('.box').next());
    },

    rules: {
      domain: {
        required: true,
        url: true,
        normalizer: function (value) {
          var url = value;
          if (url && url.substr(0, 7) !== "http://" &&
            url.substr(0, 8) !== "https://" &&
            url.substr(0, 6) !== "ftp://") {
            url = "http://" + url;
          }
          return url;
        }
      },
      ipaddress: {
        required: true,
        ipAddressFormat: true
      },
      ssl: {
        required: false
      },
      cardNum: {
        required: true,
        digits: true
      },
      cardNum2: {
        required: true,
        digits: true
      },
      cardNum3: {
        required: true,
        digits: true
      },
      cardNum4: {
        required: true,
        digits: true
      },
      cardCode: {
        required: true,
        digits: true
      },
      cardExpiration: {
        required: true,
        digits: true
      },
      cardExpiration2: {
        required: true,
        digits: true
      },
      firstName: {
        required: true,
        lettersonly: true
      },
      lastName: {
        required: true,
        lettersonly: true
      }
    },
    focusInvalid: false
  })
});