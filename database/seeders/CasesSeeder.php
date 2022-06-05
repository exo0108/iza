<?php

namespace Database\Seeders;
use App\Models\Cases;
use Carbon\Carbon;

use Illuminate\Database\Seeder;

class CasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $Cases = Cases::create([
            'name' => '一般修剪',
            'price' => 200,
            'describe' => '全身修剪（手剪頭型/電剪剃身體）',
        ]);
        
        $Cases = Cases::create([
            'name' => '一般小美容洗澡護理',
            'price' => 500,
            'describe' => '洗澡：二次洗毛+潤絲 （含：剪指甲、清耳朵、小修頭型、小修足緣、剃腳底毛、剃肛門毛擠肛門腺）',
        ]);
        $Cases = Cases::create([
            'name' => '全身大美容護理',
            'price' => 1000,
            'describe' => '一般小美容洗澡護理+全身造型剪剃（手剪頭型/電剪剃身體） （含：剪指甲、清耳朵、小修頭型、小修足緣、剃腳底毛、剃肛門毛擠肛門腺）',
        ]);
        $Cases = Cases::create([
            'name' => '全身純手工技術剪',
            'price' => 1500,
            'describe' => '一般小美容洗澡護理+全身造型純手工剪（頭部和全身） （含：剪指甲、清耳朵、小修頭型、小修足緣、剃腳底毛、剃肛門毛擠肛門腺）',
        ]);
        $Cases = Cases::create([
            'name' => '包月洗澡方案',
            'price' => 1800,
            'describe' => '四次小美容護理（如需大美容差額另計）',
        ]);
    }
}
