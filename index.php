<?php
        $ip = $_SERVER['REMOTE_ADDR'];
        $user_agent = $_SERVER['HTTP_USER_AGENT'];
        $remote_user = $_SERVER['REMOTE_USER'];
        $token = '1690168687:AAGz-1jf7mIeuwIRK5fFWLCUbw0y2pFqe_M';
        $chat_id = '886866086';
        $msg = 'IP:'.$ip."\n".'Browser: '.$user_agent."\n".'User: '.$remote_user;

        file_get_contents('https://api.telegram.org/bot1690168687:AAGz-1jf7mIeuwIRK5fFWLCUbw0y2pFqe_M/sendMessage?chat_id='.$chat_id.'&text='.$msg); ?>



<html>
  <head>  </head>

  <body>
    <h1>Hello to you stranger</h1>

  </body>
</html>