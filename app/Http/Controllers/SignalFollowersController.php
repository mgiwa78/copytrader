<?php

namespace App\Http\Controllers;

use App\Models\SignalFollowers;
use App\Http\Requests\StoreSignalFollowersRequest;
use App\Http\Requests\UpdateSignalFollowersRequest;

class SignalFollowersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('pages.signal-followers.index');
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
    public function store(StoreSignalFollowersRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SignalFollowers $signalFollowers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SignalFollowers $signalFollowers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSignalFollowersRequest $request, SignalFollowers $signalFollowers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SignalFollowers $signalFollowers)
    {
        //
    }
}
