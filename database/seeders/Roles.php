<?php

namespace Database\Seeders;

use App\Models\Roles as ModelsRoles;
use Illuminate\Database\Seeder;

class Roles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsRoles::insert([
		    [
		        'name' => 'Master',

		    ],

		    [
		        'name' => 'Admin',
            ],

            [
		        'name' => 'Supervisor',
            ],

            [
		        'name' => 'Operador',
            ]
		]);
    }
}
