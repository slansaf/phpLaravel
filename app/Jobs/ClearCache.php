<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class  ClearCache implements ShouldQueue
{
     use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
    // Очистка лог-файла
        $logFile = storage_path('logs/laravel.log');
        if (file_exists($logFile)) {
            file_put_contents($logFile, '');
            \Log::info('Лог-файл был очищен.');
        }
    }
}
