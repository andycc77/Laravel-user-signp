<?php
/**
 * Created by PhpStorm.
 * User: chenallen
 * Date: 2017/12/10
 * Time: 上午12:30
 */

namespace App\Mailer;


class UserMailer extends Mailer
{
    public function welcome($user)
    {
        $subject = 'Welcom to Allen';
        $view = 'emails.welcome';
        $data = ['name'=>$user->name];
        $this->sendTo($user, $subject, $view, $data);
    }

    public function forgotPassword()
    {

    }
}