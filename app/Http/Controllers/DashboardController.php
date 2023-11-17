<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        addVendors(['amcharts', 'amcharts-maps', 'amcharts-stock']);

        return view('pages.dashboards.index');
    }

    public function billing()
    {


        return view('pages.dashboards.billing');
    }

    public function user_settings()
    {


        return view('pages.dashboards.user-settings');
    }
}
