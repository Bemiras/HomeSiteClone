<?php


namespace App\Notifications;

use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class ResetPassword extends Notification
{
    public $token;

    public function __construct($token)
    {
        $this->token = $token;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Reset hasła CKO')
            ->line('Otrzymujesz tego e-maila, ponieważ otrzymaliśmy prośbę o zresetowanie hasła do konta.')
            ->action('Reset hasła', url('password/reset', $this->token))
            ->line('Jeśli nie poprosiłeś o zresetowanie hasła, dalsze czynności nie są wymagane.');
    }
}