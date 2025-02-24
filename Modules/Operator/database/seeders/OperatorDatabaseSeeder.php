<?php

namespace Modules\Operator\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Modules\Operator\Models\Operator;

class OperatorDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Operator::create([
            'user_name' => 'Operator User',
            'email' => 'operator@example.com',
            'password' => Hash::make('password'),
            'admin_id' => 1,
        ]);
    }
}
