<?php

namespace Database\Seeders;
use App\Models\Reservation;
use Carbon\Carbon;

use Illuminate\Database\Seeder;

class ReservationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $Reservation = Reservation::create([            
            'date' => '2022-07-01',
            'period' => '上午',           
            'memberID' => 1,
            'storeID' => 1,
            'caseID' => 4,
        ]);
        
        $Reservation = Reservation::create([
            'date' => '2022-07-10',
            'period' => '下午',            
            'memberID' => 2,
            'storeID' => 2,
            'caseID' => 1,
        ]);
        
        $Reservation = Reservation::create([            
            'date' => '2022-08-15',
            'period' => '上午',            
            'memberID' => 2,
            'storeID' => 2,
            'caseID' => 2,
        ]);
        
        $Reservation = Reservation::create([
            'date' => '2022-09-07',
            'period' => '下午',            
            'memberID' => 2,
            'storeID' => 1,
            'caseID' => 3,
        ]);
        
        $Reservation = Reservation::create([            
            'date' => '2022-07-25',
            'period' => '上午',            
            'memberID' => 3,
            'storeID' => 1,
            'caseID' => 3,
        ]);
        
        $Reservation = Reservation::create([            
            'date' => '2022-09-22',
            'period' => '上午',            
            'memberID' => 3,
            'storeID' => 2,
            'caseID' => 2,
        ]);
    }
}
