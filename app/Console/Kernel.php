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
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polrestabessurabaya'])->monthlyOn(5, '02:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polressumenep'])->monthlyOn(5, '02:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polrespelabuhantanjungperak'])->monthlyOn(5, '02:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polresgresik'])->monthlyOn(5, '02:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polrestulungagung'])->monthlyOn(5, '02:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polrestrenggalek'])->monthlyOn(5, '02:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polressidoarjo'])->monthlyOn(5, '02:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polresmadiunkota'])->monthlyOn(5, '02:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polresmalangkota'])->monthlyOn(5, '02:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polresmadiun'])->monthlyOn(5, '02:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polresngawi'])->monthlyOn(5, '02:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polresmalang'])->monthlyOn(5, '02:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polresmagetan'])->monthlyOn(5, '02:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polresbatu'])->monthlyOn(5, '02:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polresponorogo'])->monthlyOn(5, '02:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polresprobolinggo'])->monthlyOn(5, '02:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polrespacitan'])->monthlyOn(5, '02:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polresbojonegoro'])->monthlyOn(5, '02:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polresprobolinggokota'])->monthlyOn(5, '02:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polrestuban'])->monthlyOn(5, '02:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polrespasuruankota'])->monthlyOn(5, '02:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polreslamongan'])->monthlyOn(5, '02:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polresmojokertokota'])->monthlyOn(5, '02:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polrespasuruan'])->monthlyOn(5, '02:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polresmojokerto'])->monthlyOn(5, '02:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polreslumajang'])->monthlyOn(5, '02:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polresjombang'])->monthlyOn(5, '02:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polresbondowoso'])->monthlyOn(5, '02:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polresjember'])->monthlyOn(5, '02:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polrespamekasan'])->monthlyOn(5, '02:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polressitubondo'])->monthlyOn(5, '02:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polresbanyuwangi'])->monthlyOn(5, '02:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polresbangkalan'])->monthlyOn(5, '02:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polresblitarkota'])->monthlyOn(5, '02:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polreskedirikota'])->monthlyOn(5, '02:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polressampang'])->monthlyOn(5, '02:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polreskediri'])->monthlyOn(5, '02:00');
        $schedule->call('App\Http\Controllers\PdfCon@save',['id'=>'polresnganjuk'])->monthlyOn(5, '02:00');
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
