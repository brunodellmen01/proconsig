<?php

namespace App\Http\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UsersRepository implements RepositoryInterface
{

	protected $users;

	public function __construct(User $users)
	{
		$this->users= $users;
	}

	public function findById($id)
	{
		return $this->users->whereUuid($id)->firstOrFail();
	}

    public function findLastById($id)
	{
		return $this->users->whereUuid($id)->orderBy('id', 'desc')->firstOrFail();
	}

	public function findAll()
	{
        return $this->users->get();
	}

	public function count()
	{
		return $this->users->count();
	}


	public function create($params)
	{
        $users = User::create($params);

		return $users;
	}

	public function update($uuid, $params)
	{
        $users = $this->users->whereUuid($uuid)->firstOrFail();
        $users->fill($params)->update();

		return $users;
	}

	public function destroy($id)
	{
		$users = $this->users->whereUuid($id)->firstOrFail();
		$users->delete();
		return $users;
	}

	public function restore($id)
	{
		$users = $this->users->onlyTrashed()->whereUuid($id)->firstOrFail();
        $users->restore();
        return $users;
	}

	public function trash()
	{
		$searchTables = User::onlyTrashed()->get();
        return response()->json($searchTables);
	}
}
