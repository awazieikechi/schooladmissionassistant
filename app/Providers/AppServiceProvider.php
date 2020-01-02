<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\URL;
use Carbon\Carbon;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Override the email notification for verifying email
        VerifyEmail::toMailUsing(function ($notifiable,$url){
            $mail = new MailMessage;
            $mail->subject('Welcome to My Admission! Your Registration was Successful');
            $mail->markdown('mails.verify', ['url' => $url]);
            return $mail;
        });
        //
        Schema::defaultStringLength(191);
    }
}
