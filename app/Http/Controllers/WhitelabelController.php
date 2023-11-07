<?php

namespace App\Http\Controllers;

use App\Models\Whitelabel;
use App\Http\Requests\StoreWhitelabelRequest;
use App\Http\Requests\UpdateWhitelabelRequest;

class WhitelabelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function setup()
    {

        return view('pages.white-label.setup.index');
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
    public function store(StoreWhitelabelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Whitelabel $whitelabel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Whitelabel $whitelabel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWhitelabelRequest $request, Whitelabel $whitelabel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Whitelabel $whitelabel)
    {
        //
    }
}
