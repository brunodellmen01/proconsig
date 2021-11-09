<?php

namespace App\Http\Repositories;

use App\Models\Adresses;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdressesRepository implements RepositoryInterface
{

	protected $adresses;

	public function __construct(Adresses $adresses)
	{
		$this->adresses= $adresses;
	}

	public function findById($id)
	{
		return $this->adresses->whereUuid($id)->firstOrFail();
	}

    public function findLastById($id)
	{
		return $this->adresses->whereUuid($id)->orderBy('id', 'desc')->firstOrFail();
	}

	public function findAll()
	{
        return $this->adresses->get();
	}

	public function count()
	{
		return $this->adresses->count();
	}


	public function create($params)
	{
        $adresses = Adresses::create($params);

		return $adresses;
	}

	public function update($uuid, $params)
	{
        $adresses = $this->adresses->whereUuid($uuid)->firstOrFail();
        $adresses->fill($params)->update();

		return $adresses;
	}

	public function destroy($id)
	{
		$adresses = $this->adresses->whereUuid($id)->firstOrFail();
		$adresses->delete();
		return $adresses;
	}

	public function restore($id)
	{
		$adresses = $this->adresses->onlyTrashed()->whereUuid($id)->firstOrFail();
        $adresses->restore();
        return $adresses;
	}

	public function trash()
	{
		$searchTables = Adresses::onlyTrashed()->get();
        return response()->json($searchTables);
	}
}
