<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Repositories\ProposalsRepository;
use App\Http\Requests\ProposalRequest;
use Illuminate\Http\Request;

use Exception;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use DOMDocument;

class ProposalsController extends Controller
{
    protected $proposals;


    public function __construct(ProposalsRepository $proposals)
    {
        $this->proposals = $proposals;
    }

    public function index()
    {
        //$proposals = $this->proposals->findAll();

        return view('modules.proposal.index', compact('proposals'));
    }

    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $proposals = $this->proposals->create($request->all());
            Session::flash('flash_success', '');
            return redirect()->action(
                [ProposalsController::class, 'index']
            );
        } catch (Exception $e) {
            Session::flash('error', '');
            return redirect()->action(
                [ProposalsController::class, 'index']
            )->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $uuid)
    {
        try {
            $proposals = $this->proposals->update($uuid, $request->all());
            Session::flash('flash_success', 'Registro adicionado com sucesso');
            return redirect()->action(
                [ProposalsController::class, 'index']
            );
        } catch (\Throwable $th) {
            Session::flash('flash_error', '');
            return redirect()->action(
                [ProposalsController::class, 'index']
            )->withErrors($th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($request)
    {
        try {
            $proposals = $this->proposals->destroy($request);
            Session::flash('flash_success', 'Registro adicionado com sucesso');
            return redirect()->action(
                [ProposalsController::class, 'index']
            );
        } catch (\Throwable $th) {
            Session::flash('flash_error', '');
            return redirect()->action(
                [ProposalsController::class, 'index']
            )->withErrors($th->getMessage());
        }
    }
}
