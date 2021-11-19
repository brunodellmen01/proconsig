<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Repositories\CompaniesRepository;
use App\Http\Requests\CompaniesRequest;
use App\Models\Coefficients;
use App\Models\Companies;
use App\Models\Status;
use App\Services\CompanyService;
use App\Support\Message;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CompaniesController extends Controller
{
    protected $companies;
    protected $users;
    protected $adresses;
    protected $message;


    public function __construct(CompaniesRepository $companies, CompanyService $companyService)
    {
        $this->companies = $companies;
        $this->companyService = $companyService;
        $this->message = new Message();
    }

    public function index()
    {
        $companies = $this->companies->findAll();
        $countCompanies = $this->companies->count();

        return view('admin.company.index', compact('companies', 'countCompanies'));
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
        return view('admin.company.create', compact('status_id', 'coefficient_id', 'states'));
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
            $this->companyService->createCompany($request->all());
            $json['message'] = $this->message->success('empresa cadastrada com sucesso')->render();
            $json['redirect'] = route('admin.companies.index');
            return response()->json($json);
        } catch (Exception $e) {
            $json['message'] = $this->message->warning('Desculpe, não foi possível cadastrar uma empresa, tente novamente!')->render();
            return response()->json($json);
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
    public function edit($uuid)
    {
        try {
            $company = $this->companies->findById($uuid);
            return view('admin.company.edit', compact('company'));
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
    public function update(Request $request, $uuid)
    {
        dd($uuid);
        try {
            $companies = $this->companies->update($uuid, $request->all());
            $json['message'] = $this->message->success('Empresa atualizada com sucesso')->render();
            $json['redirect'] = route('admin.company.edit', ['uuid' => $request->uuid]);
            return response()->json($json);
        } catch (Exception $e) {
            $json['message'] = $this->message->warning('Desculpe, não foi possível atualizar a empresa, tente novamente!')->render();
            return response()->json($json);
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
