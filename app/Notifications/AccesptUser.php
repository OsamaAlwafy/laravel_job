<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AccesptUser extends Notification
{       protected $company ;
        protected $job;
    use Queueable;
  
    /**
     * Create a new notification instance.
     *
     * @return void
     */

    public function __construct($company,$job)
    {
      $this->company=$company;
      $this->job=$job;   
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
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
                    
                    ->greeting('تهانيا')
                    ->subject('وظيفة من ' .$this->company->name)
                    ->line('The introduction to the notification.'.$this->job->name)
                    ->action('Notification Action', url('/details_job/'.$this->job->id))
                    ->line('Thank you for using our application!');
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
        'invoice_id' => $this->invoice->id,
        'amount' => $this->invoice->amount,
    ];
}
}
