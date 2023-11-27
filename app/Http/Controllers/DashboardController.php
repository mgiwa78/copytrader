<?php

namespace App\Http\Controllers;
use App\Models\MasterAccount;
use App\Models\SlaveAccount;

class DashboardController extends Controller
{
    public function index()
    {
        addVendors(['amcharts', 'amcharts-maps', 'amcharts-stock']);
        // Get the ID of the logged-in user
        $userId = auth()->id();

        // Retrieve master accounts for the current user
        $masterAccounts = MasterAccount::where('user_id', $userId)->get();

        // Retrieve slave accounts for the current user
        $slaveAccounts = SlaveAccount::where('user_id', $userId)->get();

        // Pass the data to the view
        return view('pages.dashboards.index', ['masterAccounts' => $masterAccounts], ['slaveAccounts' => $slaveAccounts]);
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
