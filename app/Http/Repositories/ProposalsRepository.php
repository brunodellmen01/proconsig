<?php

namespace App\Http\Repositories;

use App\Models\ProductCustomers;
use App\Models\Products;
use App\Models\ProposalCart;
use App\Models\ProposalCustomers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ProposalsRepository implements RepositoryInterface
{

	protected $proposals;

	public function __construct(ProposalCustomers $proposals)
	{
		$this->proposals = $proposals;
	}

	public function findById($id)
	{
		return $this->proposals->whereUuid($id)->firstOrFail();
	}

    public function findLastById($id)
	{
		return $this->proposals->whereUuid($id)->orderBy('id', 'desc')->firstOrFail();
	}

	public function findAll()
	{
        if (Auth::user()->role_id == 2) {
            return $this->proposals->select('id', 'uuid','customer_id', 'created_at')->where('seller_id', Auth::user()->id)->get();
        }
        else {
            return $this->proposals->select('id', 'uuid','customer_id', 'created_at')->get();
        }
	}

	public function count()
	{
		return $this->proposals->count();
	}


	public function create($params)
	{
        try {

            $proposal = $params['proposal'];

            if (isset($params['leader'])) {
                $leader = $params['leader'];
            }

            $proposalCustomers = ProposalCustomers::create($proposal);
            $id_proposalCustomers = $proposalCustomers->id;

            if (isset($params['leader'])) {
                for ($i = 0; $i < count($leader['function_id']); $i++) {
                    ProposalCart::create([
                        'proposal_id' => $id_proposalCustomers,
                        'product_id' => $leader['function_id'][$i],
                        'qty' => 1,
                    ]);
                }
            }


            return $this->proposals->latest()->first();
        } catch (\Exception $e) {
            Session::flash('flash_error', '');
            return back()->withErrors($e->getMessage());
        }
	}

	public function update($uuid, $params)
	{
        $proposals = $this->proposals->whereUuid($uuid)->firstOrFail();
        $proposals->fill($params)->update();

		return $proposals;
	}

	public function destroy($id)
	{
		$proposals = $this->proposals->whereUuid($id)->firstOrFail();
		$proposals->delete();
		return $proposals;
	}

	public function restore($id)
	{
		$proposals = $this->proposals->onlyTrashed()->whereUuid($id)->firstOrFail();
        $proposals->restore();
        return $proposals;
	}

	public function trash()
	{
		$searchTables = ProposalCustomers::onlyTrashed()->get();
        return response()->json($searchTables);
	}

    public function departamentFunctions()
    {
        $functions = Products::get();
        return response()->json($functions);
    }
}
