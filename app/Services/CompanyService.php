<?php

namespace App\Services;

use App\Http\Repositories\AdressesRepository;
use App\Http\Repositories\CompaniesRepository;
use App\Http\Repositories\UsersRepository;

class CompanyService
{
    public function __construct(CompaniesRepository $companies, UsersRepository $users, AdressesRepository $adresses)
    {
        $this->companies = $companies;
        $this->users = $users;
        $this->adresses = $adresses;
    }

    public function createCompany($request)
    {
        $user = $this->users->create([
            'name' => "ADM ". $request['fantasy_name'],
            'email' => $request['email'],
            'status_id' => 1,
        ]);
        $adresses = $this->adresses->create([
            'name' => $request['name'],
            'number' => $request['number'],
            'district' => $request['district'],
            'zipcode' => $request['zipcode'],
            'complement' => $request['complement'],
            'city' => $request['city'],
            'state' => $request['state']
        ]);

        $companies = $this->companies->create([
            'fantasy_name' => $request['fantasy_name'],
            'company_name' => $request['company_name'],
            'document' => $request['document'],
            'responsible_name' => $request['responsible_name'],
            'email' => $request['email'],
            'status_id' => $request['status_id'],
            'phone' => $request['phone'],
            'total_users' => $request['total_users'],
            'total_users_fgts' => $request['total_users_fgts'],
            'total_users_siap' => $request['total_users_siap'],
            'total_users_military' => $request['total_users_military'],
            'license_end' => $request['license_end'],
            'user_id' => $user->id,
            'address_id' => $adresses->id,
            'date_cancell' => $request['date_cancell']
        ]);
    }
}
