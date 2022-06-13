<?php

namespace Database\Seeders;
use App\Models\District;
use Carbon\Carbon;

use Illuminate\Database\Seeder;

class DistrictsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $District = District::create([
            'name' => '中山區',
            'cityID' => '1',
        ]);

        $District = District::create([
            'name' => '中正區',
            'cityID' => '1',
        ]);

        $District = District::create([
            'name' => '信義區',
            'cityID' => '1',
        ]);

        $District = District::create([
            'name' => '仁愛區',
            'cityID' => '1',
        ]);

        $District = District::create([
            'name' => '暖暖區',
            'cityID' => '1',
        ]);

        $District = District::create([
            'name' => '安樂區',
            'cityID' => '1',
        ]);

        $District = District::create([
            'name' => '七堵區',
            'cityID' => '1',
        ]);

        $District = District::create([
            'name' => '士林區',
            'cityID' => '2',
        ]);

        $District = District::create([
            'name' => '大同區',
            'cityID' => '2',
        ]);

        $District = District::create([
            'name' => '大安區',
            'cityID' => '2',
        ]);

        $District = District::create([
            'name' => '中山區',
            'cityID' => '2',
        ]);

        $District = District::create([
            'name' => '中正區',
            'cityID' => '2',
        ]);

        $District = District::create([
            'name' => '內湖區',
            'cityID' => '2',
        ]);

        $District = District::create([
            'name' => '文山區',
            'cityID' => '2',
        ]);

        $District = District::create([
            'name' => '北投區',
            'cityID' => '2',
        ]);

        $District = District::create([
            'name' => '松山區',
            'cityID' => '2',
        ]);

        $District = District::create([
            'name' => '信義區',
            'cityID' => '2',
        ]);

        $District = District::create([
            'name' => '南港區',
            'cityID' => '2',
        ]);

        $District = District::create([
            'name' => '萬華區',
            'cityID' => '2',
        ]);

        $District = District::create([
            'name' => '',
            'cityID' => '3',
        ]);

        
    }
}
