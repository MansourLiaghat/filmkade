<?php

namespace App\Providers;

use App\Mail\verifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

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
        Paginator::useBootstrapFive();
        Paginator::useBootstrapFour();





        // verifyEmail::toMailUsing(function($notifiable , $url){
        //     return (new MailMessage)
        //     ->line('verify email new')
        //     ->action('verify' , $url); 
        // });
    }
}
