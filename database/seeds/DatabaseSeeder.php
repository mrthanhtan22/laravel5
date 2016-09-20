<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();
        DB::table('customers')->delete();
        $this->call(CustomersTableSeeder::class);
        Model::reguard();
    }
}
