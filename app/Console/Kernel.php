<?php

namespace App\Console;


use App\Console\Commands\GenerateResources;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel


{

    protected $commands = [
        GenerateResources::class,
    ];

    protected function schedule(Schedule $schedule): void
    {
        $schedule->command('resources:generate')->everyMinute();
    }

    

    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
