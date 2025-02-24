<?php

namespace Modules\Entity\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Entity\Models\Entity;
class EntityDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Entity::create([
            'name' => 'Entity Name',
            'admin_id' => 1,
            'description' => 'Entity Description',
        ]);
    }
}
