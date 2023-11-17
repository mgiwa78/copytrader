<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use App\Http\Requests\StoreSettingsRequest;
use App\Http\Requests\UpdateSettingsRequest;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function profileSettings()
    {
        return view('pages.settings.profiles-manager.profile-settings');
    }
    public function billingAddress()
    {
        return view('pages.settings.profiles-manager.billing-address');
    }
    /**
     * Display a listing of the resource.
     */
    public function myDetails()
    {
        return view('pages.settings.user-settings.my-details');
    }
    public function password()
    {
        return view('pages.settings.user-settings.password');
    }
    /**
     * Display a listing of the resource.
     */
    public function billing()
    {
        return view('pages.settings.billing.index');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSettingsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Settings $settings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Settings $settings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSettingsRequest $request, Settings $settings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Settings $settings)
    {
        //
    }
}
