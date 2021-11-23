<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Repositories\CampaignsRepository;
use App\Http\Requests\CampaignsRequest;
use App\Models\Companies;
use App\Services\CampaignsService;
use App\Support\Message;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CampaignsController extends Controller
{
    protected $campaigns;
    protected $message;


    public function __construct(CampaignsRepository $campaigns, CampaignsService $campaignService)
    {
        $this->campaigns = $campaigns;
        $this->campaignService = $campaignService;
        $this->message = new Message();
    }

    public function index()
    {
        $campaigns = $this->campaigns->findAll();

        return view('admin.campaigns.index', compact('campaigns'));
    }

    public function create()
    {
        $company_id = Companies::pluck('company_name', 'id', 'code');
        return view('admin.campaigns.create', compact('company_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CampaignsRequest $request)
    {
       try {
            $this->campaignService->createCampaign($request->all());
            $json['message'] = $this->message->success('campanha cadastrada com sucesso')->render();
            $json['redirect'] = route('admin.campaigns.index');
            return response()->json($json);
        } catch (Exception $e) {
            $json['message'] = $this->message->warning('Desculpe, não foi possível cadastrar uma campanha, tente novamente!')->render();
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
            $campaign = $this->campaigns->findById($id);
            return view('modules.campaigns.show', compact('campaign'));
        } catch (\Throwable $th) {
            Session::flash('error', 'Ocorreu um erro, contate-o o suporte técnico!');
            return redirect()->action(
                [CampaignsController::class, 'index']
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
            $campaign = $this->campaigns->findById($id);
            $company_id = Companies::pluck('company_name', 'id', 'code');
            return view('admin.campaigns.edit', compact('campaign', 'company_id'));
        } catch (\Throwable $th) {
            Session::flash('error', 'Ocorreu um erro, contate-o o suporte técnico!');
            return redirect()->action(
                [CampaignsController::class, 'index']
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
    public function update(CampaignsRequest $request, $uuid)
    {
        try {
            $this->campaigns->update($uuid, $request->all());
            $json['message'] = $this->message->success('campanha atualizada com sucesso')->render();
            $json['redirect'] = route('admin.campaigns.index');
            return response()->json($json);
        } catch (Exception $e) {
            $json['message'] = $this->message->warning('Desculpe, não foi possível atualizar a campanha, tente novamente!')->render();
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
            $campaigns = $this->campaigns->destroy($request);
            Session::flash('flash_success', 'Operação realizada com sucesso!');
            return redirect()->action(
                [CampaignsController::class, 'index']
            );
        } catch (\Throwable $th) {
            Session::flash('error', 'Ocorreu um erro, contate-o o suporte técnico!');
            return redirect()->action(
                [CampaignsController::class, 'index']
            )->withErrors($th->getMessage());
        }
    }

    public function restore($id)
    {
        try {
            $campaigns = $this->campaigns->restore($id);
            Session::flash('flash_success', 'Operação realizada com sucesso!');
            return redirect()->action(
                [CampaignsController::class, 'index']
            );
        } catch (\Throwable $th) {
            Session::flash('error', 'Ocorreu um erro, contate-o o suporte técnico!');
            return redirect()->action(
                [CampaignsController::class, 'index']
            )->withErrors($th->getMessage());
        }
    }

    public function trash()
    {
        $campaigns = $this->campaigns->trash();
    }
}
