<?php

namespace App\Http\Controllers;

use App\Models\SlaveAccount;
use Illuminate\Http\Request;

class SlaveAccountController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'broker_technology' => 'required',
            'login_id' => 'required',
            'password' => 'required',
            'server' => 'required',
            'subscription' => 'required',
        ]);

        // Create a new SlaveAccount instance and fill it with the form data
        $slaveAccount = new SlaveAccount;
        $slaveAccount->broker_technology = $request->input('broker_technology');
        $slaveAccount->login_id = $request->input('login_id');
        $slaveAccount->password = bcrypt($request->input('password'));
        $slaveAccount->server = $request->input('server');
        $slaveAccount->subscription = $request->input('subscription');

        // Save the data to the database
        $slaveAccount->save();

        // Redirect or respond as needed
        return redirect()->route('configurator.accounts');
    }
}
