<?php

    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $number = $_POST["number"];
    $email = $_POST["email"];
    $message = $_POST["text"];

    $arr = array(
        'Имя: ' => $name,
        'Фамилия: ' => $surname,
        'Телефон: ' => $number,
        'Email:' => $email,
        'Сообщение:' => $message
    );
      
    foreach($arr as $key => $value) {
        $txt .= "<b>".$key."</b> ".$value."%0A";
    };


    $token = "6067857695:AAHU1Zz8kAcUCdvIfZzqIzOkAwJj1SNoLrk";
    $chat_id = "-993954815";

    $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

?>