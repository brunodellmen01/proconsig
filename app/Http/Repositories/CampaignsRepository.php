<?php

namespace App\Http\Repositories;

use App\Models\Campaigns;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CampaignsRepository implements RepositoryInterface
{

	protected $campaigns;

	public function __construct(Campaigns $campaigns)
	{
		$this->campaigns = $campaigns;
	}

	public function findById($id)
	{
		return $this->campaigns->whereUuid($id)->firstOrFail();
	}

    public function findLastById($id)
	{
		return $this->campaigns->whereUuid($id)->orderBy('id', 'desc')->firstOrFail();
	}

	public function findAll()
	{
        return $this->campaigns->get();
	}

	public function count()
	{
		return $this->campaigns->count();
	}

	public function create($params)
	{
        $campaigns = Campaigns::create($params);

		return $campaigns;
	}

	public function update($uuid, $params)
	{
        $company = $this->campaigns->whereUuid($uuid)->firstOrFail();
        $company->fill($params)->update();

		return $company;
	}

	public function destroy($id)
	{
		$campaigns = $this->campaigns->whereUuid($id)->firstOrFail();
		$campaigns->delete();
		return $campaigns;
	}

	public function restore($id)
	{
		$campaigns = $this->campaigns->onlyTrashed()->whereUuid($id)->firstOrFail();
        $campaigns->restore();
        return $campaigns;
	}

	public function trash()
	{
		$searchTables = Campaigns::onlyTrashed()->get();
        return response()->json($searchTables);
	}
}
