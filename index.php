<?php
 $languages = array('en');
 $header = explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE']);
 foreach($header as $lang) {
    if(in_array($lang, $languages)) {
    header("Location: home_en.php");
        break;
    }
 }

  $page = "home";
  $lang = "en";
  include("texts.php");
  include("templates/".$page.".php");
?>
