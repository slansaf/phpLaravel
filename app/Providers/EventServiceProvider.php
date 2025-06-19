<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
  protected $listen = [
        NewsHidden::class => [
            NewsHiddenListener::class,
        ],
    ];

    public function boot()
    {
        //
    }
}
