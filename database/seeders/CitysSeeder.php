<?php

namespace Database\Seeders;
use App\Models\City;
use Carbon\Carbon;

use Illuminate\Database\Seeder;

class CitysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $City = City::create([
            'name' => '基隆市',
        ]);

        $City = City::create([
            'name' => '台北市',
        ]);

        $City = City::create([
            'name' => '新北市',
        ]);

        $City = City::create([
            'name' => '桃園市',
        ]);

        $City = City::create([
            'name' => '新竹市',
        ]);

        $City = City::create([
            'name' => '新竹縣',
        ]);

        $City = City::create([
            'name' => '苗栗縣',
        ]);

        $City = City::create([
            'name' => '台中市',
        ]);

        $City = City::create([
            'name' => '彰化縣',
        ]);

        $City = City::create([
            'name' => '南投縣',
        ]);

        $City = City::create([
            'name' => '雲林縣',
        ]);

        $City = City::create([
            'name' => '嘉義市',
        ]);

        $City = City::create([
            'name' => '嘉義縣',
        ]);

        $City = City::create([
            'name' => '台南市',
        ]);

        $City = City::create([
            'name' => '高雄市',
        ]);

        $City = City::create([
            'name' => '屏東縣',
        ]);

        $City = City::create([
            'name' => '台東縣',
        ]);

        $City = City::create([
            'name' => '花蓮縣',
        ]);

        $City = City::create([
            'name' => '宜蘭縣',
        ]);

        $City = City::create([
            'name' => '澎湖縣',
        ]);

        $City = City::create([
            'name' => '澎湖縣',
        ]);

        $City = City::create([
            'name' => '連江縣',
        ]);
    }
}
