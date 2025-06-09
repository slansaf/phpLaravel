<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Employee;

class TestDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'database:test-insert';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        // for ($i=0; $i < 5; $i++) { 
        // $employee = new Employee();
        // $employee -> first_name = 'Jhon';
        // $employee -> save();
        // }

        $employee = Employee::where('id', 6) -> first();
        $employee -> first_name = 'Oleg';
        $employee -> save();
       
        // Employee::where('id', 5) -> delete();
       

        return 0;
    }
}
