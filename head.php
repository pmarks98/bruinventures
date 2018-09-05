<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Cultivating UCLA’s Leaders in Entrepreneurship, Technology, and Venture Capital.">
  <meta name="author" content="UCLA Bruin Ventures">
  <!-- Favicon -->
  <link href="./assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="./assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="./assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="./assets/css/argon.css?v=1.0.0" rel="stylesheet">
  <!-- Docs CSS -->
  <link type="text/css" href="./assets/css/docs.min.css" rel="stylesheet">
</head>
<?php
//connect to SQL database
include("includes/connect.php");

//define password hashing function
function cryptPass($input, $rounds = 9) {
$salt = "";
$saltChars = array_merge(range('A', 'Z'), range('a', 'z'), range(0, 9));
for($i = 0; $i < 22; $i++) {
$salt .= $saltChars[array_rand($saltChars)];
}
return crypt($input, sprintf('$2y$%02d$', $rounds) . $salt);
}
?>
