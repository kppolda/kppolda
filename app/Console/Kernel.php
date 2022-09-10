<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

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
        // $schedule->command('inspire')->hourly();
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polrestabessurabaya'])->lastDayOfMonth('16:00');
        $schedule->command('pdf:donlot polrestabessurabaya')->lastDayOfMonth('16:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polressumenep'])->lastDayOfMonth('16:00');
        $schedule->command('pdf:donlot polressumenep')->lastDayOfMonth('16:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polrespelabuhantanjungperak'])->lastDayOfMonth('16:00');
        $schedule->command('pdf:donlot polrespelabuhantanjungperak')->lastDayOfMonth('16:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polresgresik'])->lastDayOfMonth('16:00');
        $schedule->command('pdf:donlot polresgresik')->lastDayOfMonth('16:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polrestulungagung'])->lastDayOfMonth('16:00');
        $schedule->command('pdf:donlot polrestulungagung')->lastDayOfMonth('16:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polrestrenggalek'])->lastDayOfMonth('16:00');
        $schedule->command('pdf:donlot polrestrenggalek')->lastDayOfMonth('16:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polressidoarjo'])->lastDayOfMonth('16:00');
        $schedule->command('pdf:donlot polressidoarjo')->lastDayOfMonth('16:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polresmadiunkota'])->lastDayOfMonth('16:00');
        $schedule->command('pdf:donlot polresmadiunkota')->lastDayOfMonth('16:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polresmalangkota'])->lastDayOfMonth('16:00');
        $schedule->command('pdf:donlot polresmalangkota')->lastDayOfMonth('16:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polresmadiun'])->lastDayOfMonth('16:00');
        $schedule->command('pdf:donlot polresmadiun')->lastDayOfMonth('16:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polresngawi'])->lastDayOfMonth('16:00');
        $schedule->command('pdf:donlot polresngawi')->lastDayOfMonth('16:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polresmalang'])->lastDayOfMonth('16:00');
        $schedule->command('pdf:donlot polresmalang')->lastDayOfMonth('16:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polresmagetan'])->lastDayOfMonth('16:00');
        $schedule->command('pdf:donlot polresmagetan')->lastDayOfMonth('16:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polresbatu'])->lastDayOfMonth('16:00');
        $schedule->command('pdf:donlot polresbatu')->lastDayOfMonth('16:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polresponorogo'])->lastDayOfMonth('16:00');
        $schedule->command('pdf:donlot polresponorogo')->lastDayOfMonth('16:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polresprobolinggo'])->lastDayOfMonth('16:00');
        $schedule->command('pdf:donlot polresprobolinggo')->lastDayOfMonth('16:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polrespacitan'])->lastDayOfMonth('16:00');
        $schedule->command('pdf:donlot polrespacitan')->lastDayOfMonth('16:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polresbojonegoro'])->lastDayOfMonth('16:00');
        $schedule->command('pdf:donlot polresbojonegoro')->lastDayOfMonth('16:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polresprobolinggokota'])->lastDayOfMonth('16:00');
        $schedule->command('pdf:donlot polresprobolinggokota')->lastDayOfMonth('16:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polrestuban'])->lastDayOfMonth('16:00');
        $schedule->command('pdf:donlot polrestuban')->lastDayOfMonth('16:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polrespasuruankota'])->lastDayOfMonth('16:00');
        $schedule->command('pdf:donlot polrespasuruankota')->lastDayOfMonth('16:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polreslamongan'])->lastDayOfMonth('16:00');
        $schedule->command('pdf:donlot polreslamongan')->lastDayOfMonth('16:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polresmojokertokota'])->lastDayOfMonth('16:00');
        $schedule->command('pdf:donlot polresmojokertokota')->lastDayOfMonth('16:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polrespasuruan'])->lastDayOfMonth('16:00');
        $schedule->command('pdf:donlot polrespasuruan')->lastDayOfMonth('16:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polresmojokerto'])->lastDayOfMonth('16:00');
        $schedule->command('pdf:donlot polresmojokerto')->lastDayOfMonth('16:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polreslumajang'])->lastDayOfMonth('16:00');
        $schedule->command('pdf:donlot polreslumajang')->lastDayOfMonth('16:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polresjombang'])->lastDayOfMonth('16:00');
        $schedule->command('pdf:donlot polresjombang')->lastDayOfMonth('16:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polresbondowoso'])->lastDayOfMonth('16:00');
        $schedule->command('pdf:donlot polresbondowoso')->lastDayOfMonth('16:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polresjember'])->lastDayOfMonth('16:00');
        $schedule->command('pdf:donlot polresjember')->lastDayOfMonth('16:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polrespamekasan'])->lastDayOfMonth('16:00');
        $schedule->command('pdf:donlot polrespamekasan')->lastDayOfMonth('16:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polressitubondo'])->lastDayOfMonth('16:00');
        $schedule->command('pdf:donlot polressitubondo')->lastDayOfMonth('16:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polresbanyuwangi'])->lastDayOfMonth('16:00');
        $schedule->command('pdf:donlot polresbanyuwangi')->lastDayOfMonth('16:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polresbangkalan'])->lastDayOfMonth('16:00');
        $schedule->command('pdf:donlot polresbangkalan')->lastDayOfMonth('16:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polresblitarkota'])->lastDayOfMonth('16:00');
        $schedule->command('pdf:donlot polresblitarkota')->lastDayOfMonth('16:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polreskedirikota'])->lastDayOfMonth('16:00');
        $schedule->command('pdf:donlot polreskedirikota')->lastDayOfMonth('16:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polressampang'])->lastDayOfMonth('16:00');
        $schedule->command('pdf:donlot polressampang')->lastDayOfMonth('16:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polreskediri'])->lastDayOfMonth('16:00');
        $schedule->command('pdf:donlot polreskediri')->lastDayOfMonth('16:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polresnganjuk'])->lastDayOfMonth('16:00');
        $schedule->command('pdf:donlot polresnganjuk')->lastDayOfMonth('16:00');
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
