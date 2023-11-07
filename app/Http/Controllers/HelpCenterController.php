<?php

namespace App\Http\Controllers;

use App\Models\HelpCenter;
use App\Http\Requests\StoreHelpCenterRequest;
use App\Http\Requests\UpdateHelpCenterRequest;

class HelpCenterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function knowledgeBase()
    {

        return view('pages.help-center.knowledge-base.index');
    }
    public function contactSupport()
    {

        return view('pages.help-center.contact-support.index');
    }
    public function faq()
    {

        return view('pages.help-center.faq.index');
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
    public function store(StoreHelpCenterRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(HelpCenter $helpCenter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HelpCenter $helpCenter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHelpCenterRequest $request, HelpCenter $helpCenter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HelpCenter $helpCenter)
    {
        //
    }
}
