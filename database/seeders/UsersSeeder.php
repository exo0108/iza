<?php

namespace Database\Seeders;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $Users = User::create([
            'name' => 'admin',
            'phone' => '0910288299',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
        ]);
        $Users = User::create([
            'name' => 'Kenneth',
            'phone' => '0952636385',
            'email' => 'kenneth@gmail.com',
            'password' => Hash::make('kenneth'),
        ]);
        $Users = User::create([
            'name' => 'Colt',
            'phone' => '0956174577',
            'email' => 'colt@gmail.com',
            'password' => Hash::make('colt'),
        ]);
        $Users = User::create([
            'name' => 'Cade',
            'phone' => '0910948646',
            'email' => 'cade@gmail.com',
            'password' => Hash::make('cade'),
        ]);
        // $Users = User::create([
        //     'name' => 'Kate',
        //     'phone' => '0930832103',
        //     'email' => 'kate@gmail.com',
        //     'password' => 'kate',
        // ]);
        // $Users = User::create([
        //     'name' => 'Erica',
        //     'phone' => '0958110507',
        //     'email' => 'erica@gmail.com',
        //     'password' => 'erica',
        // ]);
        // $Users = User::create([
        //     'name' => 'Chelsea',
        //     'phone' => '0938854210',
        //     'email' => 'chelsea@gmail.com',
        //     'password' => 'chelsea',
        // ]);
        // $Users = User::create([
        //     'name' => 'Claire',
        //     'phone' => '0954670493',
        //     'email' => 'claire@gmail.com',
        //     'password' => 'claire',
        // ]);
        // $Users = User::create([
        //     'name' => 'Griffin',
        //     'phone' => '0935596181',
        //     'email' => 'griffin@gmail.com',
        //     'password' => 'griffin',
        // ]);
        // $Users = User::create([
        //     'name' => 'Stella',
        //     'phone' => '0912557531',
        //     'email' => 'stella@gmail.com',
        //     'password' => 'stella',
        // ]);
        // $Users = User::create([
        //     'name' => 'Winter',
        //     'phone' => '0934341980',
        //     'email' => 'winter@gmail.com',
        //     'password' => 'winter',
        // ]);
        // $Users = User::create([
        //     'name' => 'Harry',
        //     'phone' => '0986387621',
        //     'email' => 'harry@gmail.com',
        //     'password' => 'harry',
        // ]);
        // $Users = User::create([
        //     'name' => 'Mary',
        //     'phone' => '0952458889',
        //     'email' => 'mary@gmail.com',
        //     'password' => 'mary',
        // ]);
    }
}
