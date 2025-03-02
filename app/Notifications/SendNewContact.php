<?php

    namespace App\Notifications;

    use Illuminate\Bus\Queueable;
    use Illuminate\Notifications\Messages\MailMessage;
    use Illuminate\Notifications\Notification;

    class SendNewContact extends Notification {
        use Queueable;

        /**
         * Create a new notification instance.
         *
         * @return void
         */
        public function __construct() {
            //
        }

        /**
         * Get the notification's delivery channels.
         *
         * @param  mixed  $notifiable
         * @return array
         */
        public function via($notifiable) {
            return ['mail'];
        }

        /**
         * Get the mail representation of the notification.
         *
         * @param  mixed  $notifiable
         * @return \Illuminate\Notifications\Messages\MailMessage
         */
        public function toMail($notifiable) {
            return (new MailMessage)
                        ->subject('Thanks, We Appreciate Your Connection')
                        ->greeting('Hello!')
                        ->line('We appreciate your connection with us. We will get back to you soon.')
                        ->line('Thank you for using our application!');
        }
    }
