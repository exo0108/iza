<?php

namespace Database\Seeders;
use App\Models\Store;
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
        $Store = Store::create([
            'name' => '一中店',
        ]);

        $Store = Store::create([
            'name' => '逢甲分店',
        ]);
    }
}
