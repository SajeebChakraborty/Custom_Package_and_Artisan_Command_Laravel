<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Models\Wallete;
use App\Models\User;


class rexoitsalary extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rexoit:salary';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'get salary in their wallet automatically.';

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

        $user=User::all();


        foreach($user as $person)
        {

            Wallete::create([

                'user_id'   =>  $person->id,
                'salary_amount' => '25000',
                'cash_amount'   =>  '25000',
              
    
            ]);



        }


       


        return 0;
    }
}
