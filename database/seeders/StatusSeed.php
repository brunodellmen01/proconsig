<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class StatusSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::insert([
		    [
                'uuid' => Uuid::uuid4(),
		        'name' => 'Ativo',

		    ],

		    [
                'uuid' => Uuid::uuid4(),
		        'name' => 'Inativo',

		    ],
            [
                'uuid' => Uuid::uuid4(),
		        'name' => 'Demonstração',

		    ],
		]);
    }
}
