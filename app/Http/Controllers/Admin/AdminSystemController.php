<?php

namespace App\Http\Controllers\Admin;

use App\Models\Companies;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminSystemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $today = Carbon::today()->format('Y-m-d');
        $weekStartDate = Carbon::now()->startOfWeek();
        $weekEndDate = Carbon::now()->endOfWeek();
        $month = date('m');

        $companiesDayCurrent = Companies::whereBetween('created_at', [$today.' 00:00:00', $today.' 23:00:00'])->count();
        $totalCompaniesActive = Companies::where('status_id', 4)->count();
        $companiesMonthCurrent = Companies::whereRaw("MONTH(created_at)={$month}")->count();
        $companiesWeekCurrent = Companies::whereBetween('created_at', [$weekStartDate, $weekEndDate])->count();

        $lastSales = Companies::orderByDesc('created_at')->limit(5)->get();
        return view('admin-system.modules.panels.home', compact('companiesDayCurrent', 'totalCompaniesActive', 'companiesMonthCurrent', 'companiesWeekCurrent', 'lastSales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
