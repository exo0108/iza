<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UsersSeeder::class);

        $this->call(StoresSeeder::class);
        $this->call(CasesSeeder::class);
        $this->call(GoodsSeeder::class);

        $this->call(ReservationsSeeder::class);
        $this->call(CartsSeeder::class);

        $this->call(OrdersSeeder::class);
        $this->call(OrderItemsSeeder::class);
    }
}
