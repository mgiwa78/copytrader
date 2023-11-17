<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MasterAccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Inserting sample data into the slave_accounts table
        DB::table('master_accounts')->insert([
            'user_id' => 1,
            'account_id' => 123,
            'password' => bcrypt('secretpassword'),
            'server' => 'example-server',
            'subscription' => 1,

            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
