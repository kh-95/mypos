<?php

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clients=['ahmed','ali'];

        foreach($clients as $client){
        
            \App\Client::create([
               
               'name'=>$client,
               'phone'=>'01067879653',
               'address'=>'italy',
                
            ]);
        
        
        }  
    }
}
