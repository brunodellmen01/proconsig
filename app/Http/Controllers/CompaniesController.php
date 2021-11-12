<?php

namespace App\Http\Controllers;

use App\Http\Repositories\AdressesRepository;
use App\Http\Repositories\CompaniesRepository;
use App\Http\Repositories\UsersRepository;
use App\Http\Requests\CompaniesRequest;
use App\Models\Coefficients;
use App\Models\Status;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CompaniesController extends Controller
{
    protected $companies;
    protected $users;
    protected $adresses;


    public function __construct(CompaniesRepository $companies, UsersRepository $users)
    {
        $this->companies = $companies;
        $this->users= $users;

    }

    public function index()
    {
        $companies = $this->companies->findAll();
        $countCompanies = $this->companies->count();

        return view('admin-system.modules.company.index', compact('companies', 'countCompanies'));
    }

    public function create()
    {
        $states = array(
            'Acre' => 'AC',
            'Alagoas' => 'AL',
            'Amapá' => 'AP',
            'Amazonas' => 'AM',
            'Bahia' => 'BA',
            'Ceará' => 'CE',
            'Distrito Federal' => 'DF',
            'Espírito Santo' => 'ES',
            'Goiás' => 'GO',
            'Maranhão' => 'MA',
            'Mato Grosso' => 'MT',
            'Mato Grosso do Sul' => 'MS',
            'Minas Gerais' => 'MG',
            'Pará' => 'PA',
            'Paraíba' => 'PB',
            'Paraná' => 'PR',
            'Pernambuco' => 'PE',
            'Piauí' => 'PI',
            'Rio de Janeiro' => 'RJ',
            'Rio Grande do Norte' => 'RN',
            'Rio Grande do Sul' => 'RS',
            'Rondônia' => 'RO',
            'Roraima' => 'RR',
            'Santa Catarina' => 'SC',
            'São Paulo' => 'SP',
            'Sergipe' => 'SE',
            'Tocantins' => 'TO'
        );

        $status_id = Status::pluck('name', 'id');
        $coefficient_id = Coefficients::pluck('name', 'id');
        return view('admin-system.modules.company.create', compact('status_id', 'coefficient_id', 'states'));
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
            //dd($request);
            $this->companies->create([$request->all()]);
            $this->users->create([$request->all()]);
           $this->adresses->create($request->all());
            Session::flash('flash_success', 'Operação realizada com sucesso!');
            return redirect()->action(
                [CompaniesController::class, 'index']
            );
        } catch (Exception $e) {
            Session::flash('error', 'Ocorreu um erro, contate-o o suporte técnico!');
            return redirect()->action(
                [CompaniesController::class, 'index']
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
        try {
            $companies = $this->companies->findById($id);
            return view('modules.customer.show', compact('companies'));
        } catch (\Throwable $th) {
            Session::flash('error', 'Ocorreu um erro, contate-o o suporte técnico!');
            return redirect()->action(
                [CompaniesController::class, 'index']
            )->withErrors($th->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $companies = $this->companies->findById($id);
            return view('modules.customer.edit', compact('companies'));
        } catch (\Throwable $th) {
            Session::flash('error', 'Ocorreu um erro, contate-o o suporte técnico!');
            return redirect()->action(
                [CompaniesController::class, 'index']
            )->withErrors($th->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CompaniesRequest $request, $uuid)
    {
        try {
            $companies = $this->companies->update($uuid, $request->all());
            $users = $this->users->update($uuid, $request->all());
            $adresses = $this->adresses->update($uuid, $request->all());
            Session::flash('flash_success', 'Operação realizada com sucesso!');
            return redirect()->action(
                [CompaniesController::class, 'index']
            );
        } catch (\Throwable $th) {
            Session::flash('error', 'Ocorreu um erro, contate-o o suporte técnico!');
            return redirect()->action(
                [CompaniesController::class, 'index']
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
            $companies = $this->companies->destroy($request);
            Session::flash('flash_success', 'Operação realizada com sucesso!');
            return redirect()->action(
                [CompaniesController::class, 'index']
            );
        } catch (\Throwable $th) {
            Session::flash('error', 'Ocorreu um erro, contate-o o suporte técnico!');
            return redirect()->action(
                [CompaniesController::class, 'index']
            )->withErrors($th->getMessage());
        }
    }

    public function restore($id)
    {
        try {
            $companies = $this->companies->restore($id);
            Session::flash('flash_success', 'Operação realizada com sucesso!');
            return redirect()->action(
                [CompaniesController::class, 'index']
            );
        } catch (\Throwable $th) {
            Session::flash('error', 'Ocorreu um erro, contate-o o suporte técnico!');
            return redirect()->action(
                [CompaniesController::class, 'index']
            )->withErrors($th->getMessage());
        }
    }

    public function trash()
    {
        $companies = $this->companies->trash();
    }
}
