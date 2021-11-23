<?php

namespace App\Services;

use App\Http\Repositories\CampaignsRepository;

class CampaignsService
{
    public function __construct(CampaignsRepository $campaigns)
    {
        $this->campaigns = $campaigns;
    }

    public function createCampaign($request)
    {
        $campaigns = $this->campaigns->create([
            'name' => $request['name'],
            'company_id' => $request['company_id'],
        ]);
    }
}
