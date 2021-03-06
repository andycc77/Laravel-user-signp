<?php
/**
 * Created by PhpStorm.
 * User: chenallen
 * Date: 2017/12/10
 * Time: 上午12:26
 */

namespace App\Mailer;


class Mailer
{
    public function sendTo($user, $subject, $view, $data = [])
    {
        \Mail::queue($view, $data, function ($message) use ($user, $subject){
            $message->to($user->email)->subject($subject);
        });
    }
}