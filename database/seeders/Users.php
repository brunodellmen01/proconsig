<?php

namespace Database\Seeders;

use App\Models\User as ModelsUsers;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsUsers::insert([
            [
                'uuid' => Uuid::uuid4(),
                'name' => 'Administrador',
                'email' => 'adm@rv6tecnologia.com.br',
                'role_id' => '1',
                'password' => bcrypt('123456789'),
                'email_verified_at' => date('Y-m-d H:m:s'),
                'created_at' => date('Y-m-d H:m:s'),
            ]
        ]);
    }
}
