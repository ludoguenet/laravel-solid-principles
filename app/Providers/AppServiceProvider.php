<?php

namespace App\Providers;

use App\Contracts\SMSInterface;
use App\Services\SMS\SMSService;
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
        $this->app->bind(SMSService::class, function () {
            $key = env('SMS_KEY');

            return new SMSService($key);
        });

        $this->app->bind(SMSInterface::class, SMSService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
