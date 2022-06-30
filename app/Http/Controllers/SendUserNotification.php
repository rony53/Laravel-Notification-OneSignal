<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ladumor\OneSignal\OneSignal;

class SendUserNotification extends Controller
{
    public function sendNotification()
    {

        $fields['include_player_ids'] = ['xxxxxxxx-xxxx-xxx-xxxx-yyyyy'];
        $notificationMsg = 'Hello !! It is  web push notification test.!';
        OneSignal::sendPush($fields, $notificationMsg);
    }

    public function getAllNotification(){
        OneSignal::getNotifications();
    }

    public function getSingleNotification($notificationId){
        OneSignal::getNotification($notificationId);
    }
}
