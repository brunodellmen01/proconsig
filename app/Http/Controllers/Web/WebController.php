<?php

namespace App\Http\Controllers\Web;

use App\Models\Mailing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Mail\CompanyRegisteredEmail;
use App\Models\Company;
use App\Models\Ips;
use App\Models\Proposal;
use App\Models\User;
use Carbon\Carbon;

class WebController extends Controller
{
    public function home(Request $request)
    {

        // $validade = $this->validateIps($request->ip());
        // if ($validade == false) {
        //     die();
        // }

        // $companys = Company::where('company_id', '>', 1)->select('company_id')->get();
        // $users = User::where('user_id', '>', 1)->select('user_id')->get();
        // $proposals = Proposal::where('proposal_id', '>', 1)->select('proposal_id', 'proposal_value')->get();


        return view('web.home');
    }

    public function create()
    {
        return view('web.cadastro');
    }
}
