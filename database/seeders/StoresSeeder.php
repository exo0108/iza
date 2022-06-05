<?php

namespace Database\Seeders;
use App\Models\Stores;
use Carbon\Carbon;

use Illuminate\Database\Seeder;

class StoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $Stores = Stores::create([
            'name' => '一中店',
        ]);

        $Stores = Stores::create([
            'name' => '逢甲分店',
        ]);
    }
}
