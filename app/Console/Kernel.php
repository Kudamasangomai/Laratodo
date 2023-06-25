<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected $commands = [
   
   
        \App\Console\Commands\CreateAdmin::class,
        \App\Console\Commands\Start_of_day_checklist::class,
  
    ];
    protected function schedule(Schedule $schedule): void
    {
        // emails will be sent daily to user
        $schedule->command('todo:start_of_day_checklist')->timezone('Africa/Harare')->dailyAt('07:00');
        
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
