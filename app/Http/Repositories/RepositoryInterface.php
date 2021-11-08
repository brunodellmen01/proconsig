<?php

namespace App\Http\Repositories;
use Illuminate\Http\Request;


interface RepositoryInterface
{
	public function create($params);

	public function update(Request $params, $uuid);
}