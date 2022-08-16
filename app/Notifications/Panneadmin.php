<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\Panne;
use App\Models\User;
use Illuminate\Notifications\Messages\BroadcastMessage;

class Panneadmin extends Notification
{
    use Queueable;
    public $pannes;
    public $user;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Panne $pannes, User $user)
    {
        $this->user = $user;
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
        return ['database', 'broadcast'];
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
            'user_id' => $this->user->id,
        ];
    }
    public function toBroadcast($notifiable){
        return new BroadcastMessage([
            [
                'pannes_id'  => $this->pannes->id,
                'user_id' => $this->user->id,
            ]
        ]);
    }
}
