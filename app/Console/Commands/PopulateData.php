<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\SurveyorImport;
use App\Imports\DemographicImport;
use App\Imports\CrimeImport;
use App\Imports\SocioImport;

class PopulateData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'populate:data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Excel::import(new SurveyorImport, getcwd()."/gis.xlsx");
        Excel::import(new DemographicImport, getcwd()."/gis.xlsx");
        Excel::import(new CrimeImport, getcwd()."/gis.xlsx");
        Excel::import(new SocioImport, getcwd()."/gis.xlsx");
    }
}
