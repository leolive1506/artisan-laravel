<?php

namespace App\Console\Commands;

use App\Mail\DailyReport;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendDailyReportEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:report';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send email daily report';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $sales = 30;
        Mail::to('leonardolivelopes2@gmail.com')->send(new DailyReport($sales));
    }
}
