<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\Panne;

class Panneadmin extends Notification
{
    use Queueable;
    public $pannes;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Panne $pannes)
    {

        $this->pannes = $pannes;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->greeting('Salut!')
                    ->subject('Signalement de panne')
                    ->line($this->signpan->description)
                    ->action('Retourner sur notre application', url('/'))
                    ->line('Veuillez planifier une intervention pour cette panne!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'pannes_id'  => $this->pannes->id,
        ];
    }
}
