<?php

namespace App\Http\Repositories;

use App\Models\Companies;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CompaniesRepository implements RepositoryInterface
{

	protected $companies;

	public function __construct(Companies $companies)
	{
		$this->companies = $companies;
	}

	public function findById($id)
	{
		return $this->companies->whereUuid($id)->firstOrFail();
	}

    public function findLastById($id)
	{
		return $this->companies->whereUuid($id)->orderBy('id', 'desc')->firstOrFail();
	}

	public function findAll()
	{
        return $this->companies->get();
	}

	public function countTotal()
	{
		return $this->companies->count();
	}

    public function countActive()
	{
		return $this->companies->where('status_id', 1)->count();
	}

    public function countInactive()
	{
		return $this->companies->where('status_id', 2)->count();
	}

    public function countTest()
	{
		return $this->companies->where('status_id', 3)->count();
	}


	public function create($params)
	{
        $companies = Companies::create($params);

		return $companies;
	}

	public function update($uuid, $params)
	{
        $company = $this->companies->whereUuid($uuid)->firstOrFail();
        $company->fill($params)->update();

		return $company;
	}

	public function destroy($id)
	{
		$companies = $this->companies->whereUuid($id)->firstOrFail();
		$companies->delete();
		return $companies;
	}

	public function restore($id)
	{
		$companies = $this->companies->onlyTrashed()->whereUuid($id)->firstOrFail();
        $companies->restore();
        return $companies;
	}

	public function trash()
	{
		$searchTables = Companies::onlyTrashed()->get();
        return response()->json($searchTables);
	}
}
