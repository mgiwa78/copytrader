<?php

namespace App\Http\Controllers;

use App\Models\MasterAccount;
use Illuminate\Http\Request;

class MasterAccountController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'broker_technology' => 'required',
            'account_id' => 'required',
            'password' => 'required',
            'server' => 'required',
            'subscription' => 'required',
        ]);

        $userId = auth()->id();

        // Create a new MasterAccount instance and fill it with the form data
        $masterAccount = new MasterAccount;
        $masterAccount->user_id = $userId; // Set the user_id
        $masterAccount->broker_technology = $request->input('broker_technology');
        $masterAccount->account_id = $request->input('account_id');
        $masterAccount->password = bcrypt($request->input('password'));
        $masterAccount->server = $request->input('server');
        $masterAccount->subscription = $request->input('subscription');

        // Save the data to the database
        $masterAccount->save();

        // Redirect or respond as needed
        return redirect()->route('configurator.accounts');
    }
}
