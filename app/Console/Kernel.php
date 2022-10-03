<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\DB;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */

    protected $commands = [
        Commands\SendMonthlyPDF::class,
    ];

    protected function schedule(Schedule $schedule)
    {
        $users = DB::table('polres')
        ->where('id', '!=', '1')
        ->get();
        foreach( $users as $user ){
            $schedule->command('pdf:donlot ' . $user->username)->lastDayOfMonth('16:00');
            $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>$user->username])->lastDayOfMonth('16:00');
        }
        // $schedule->command('inspire')->hourly();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
