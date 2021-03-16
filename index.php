<!-- Ally Branch (aab4ad) and Leigh Striffler (lss4de) -->

<link type="text/css" rel="stylesheet" href="/stylesheets/styles.css">
<link rel="stylesheet" href="/stylesheets/owlcarousel/assets/owl.carousel.min.css">
<link rel="stylesheet" href="/stylesheets/owlcarousel/assets/owl.theme.default.min.css">

<?php
switch (@parse_url($_SERVER['REQUEST_URI'])['path']) {
   case '/':                   // URL (without file name) to a default screen
      require 'login.php';
      break;
   case '/login.php':     // if you plan to also allow a URL with the file name
      require 'login.php';
      break;
   case '/register.php':
      require 'register.php';
      break;
    case '/browse.php':
       require 'browse.php';
       break;
     case '/search.php':
        require 'search.php';
        break;
      case '/profile.php':
         require 'profile.php';
         break;
     case '/acctinfo.php':
        require 'acctinfo.php';
        break;
      default:
      http_response_code(404);
      exit('Not Found');
}
?>
