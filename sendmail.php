
<title>sendmail</title>


<?php
  $email = $_REQUEST['email'] ;
  $message = $_REQUEST['comment'] ;

  mail( "collyerdesign@gmail.com", "Feedback Form Results",
    $message, "From: $email" );
  header( "Location: thankyou.html" );
?>

