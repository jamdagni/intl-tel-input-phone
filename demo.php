<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>International Telephone Input</title>
  <link rel="stylesheet" href="build/css/intlTelInput.css">
  <link rel="stylesheet" href="build/css/demo.css">
</head>

<body>
  <h1>International Telephone Input</h1>
  <form action="demo.php" method="post">
    <input type="text" name="ccode" id="ccode" value="">
    <input id="phone1" name="phone1" type="tel">
    <button type="submit" name="submit">Submit</button>
  </form>

  <script src="build/js/intlTelInput.js"></script>
  <script>
    var input = document.querySelector("#phone1");
    window.intlTelInput(input, {
      // allowDropdown: false,
      // autoHideDialCode: false,
      // autoPlaceholder: "off",
      // dropdownContainer: document.body,
      // excludeCountries: ["us"],
      // formatOnDisplay: false,
      // geoIpLookup: function(callback) {
      //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
      //     var countryCode = (resp && resp.country) ? resp.country : "";
      //     callback(countryCode);
      //   });
      // },
      // hiddenInput: "full_number",
      //initialCountry: "auto",
      // localizedCountries: { 'de': 'Deutschland' },
      // nationalMode: false,
      // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
      // placeholderNumberType: "MOBILE",
      // preferredCountries: ['cn', 'jp'],
      // separateDialCode: true,
      utilsScript: "build/js/utils.js",
    });
  </script>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
  $ccode = $_POST['ccode'];
  $phone = $_POST['phone1'];

  $number = $ccode . $phone;
  print_r($number);
}

 ?>
