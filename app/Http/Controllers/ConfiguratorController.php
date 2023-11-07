<?php

namespace App\Http\Controllers;

use App\Models\Configurator;
use App\Http\Requests\StoreConfiguratorRequest;
use App\Http\Requests\UpdateConfiguratorRequest;

class ConfiguratorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function accounts()
    {
        addVendors(['amcharts', 'amcharts-maps', 'amcharts-stock']);

        return view('pages.signals.index');
    }



    public function tradeCopier()
    {
        // Logic for 'trade-copier' route
    }

    public function equityMonitor()
    {
        // Logic for 'equity-monitor' route
    }

    public function emailAlerts()
    {
        // Logic for 'email-alerts' route
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
    public function store(StoreConfiguratorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Configurator $configurator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Configurator $configurator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateConfiguratorRequest $request, Configurator $configurator)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Configurator $configurator)
    {
        //
    }
}
