<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Models\Polres;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Console\Command;

class SendMonthlyPDF extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pdf:donlot {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $userId = $this->argument('id');
        $bulan = array("","Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
        DB::insert('insert into lapbuls (id_polres, bulan) values (?, ?)', [$userId, $bulan[Carbon::now()->month]]);
        mkdir(public_path('lapor/' . $userId));
    }
}
