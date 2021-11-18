<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $data = [];
        // $currentUser = Auth::user();
        // $fistRoleName = $currentUser->getRoleNames()->first();
        // switch ($fistRoleName) {
        //     case 'master':
        //         $data['user'] = User::all();
        //         break;
        //     case 'operator':
        //         $user = User::where('id', Auth::user()->id);
        //         # code...
        //         break;
        //     case 'admin':
        //         # code...
        //         break;
        //     default:
        //         # code...
        //         break;
        // };

        return view('admin.dashboard');
    }
}
