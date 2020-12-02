<?php

namespace Mediator;
use DateTime;
class ChatRoom{
    public static function showMessage(User $user, string $message){
        $date = new DateTime();
        $result = $date->format('Y-m-d H:i:s');
      echo $result . " [" . $user->getName() . "] : " . $message . "<br>";
   }
}