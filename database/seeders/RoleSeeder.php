<?php

namespace Database\Seeders;

use App\Models\Roles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Roles::insert([
            [
                'nom' => 'Client'
            ],
            [
                'nom' => 'Technicien'
            ],
            [
                'nom' => 'Responsable'
            ],
        ]);
    }
}
