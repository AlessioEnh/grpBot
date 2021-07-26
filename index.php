<?php

$ip = $_SERVER['REMOTE_ADDR'];

$token = '1690168687:AAGz-1jf7mIeuwIRK5fFWLCUbw0y2pFqe_M';
$chat_id = '886866086';
$msg = 'IP:' .$ip;

file_get_contents('https://api.telegram.org/bot1690168687:AAGz-1jf7mIeuwIRK5fFWLCUbw0y2pFqe_M/sendMessage?chat_id='.$chat_id.'&text='.$msg);

?>

<html>
  <head>  </head>

  <body>
    <h1>Привет, Heroku!!!</h1>
  </body>
</html>