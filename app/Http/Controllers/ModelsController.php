<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Dress;
use App\Models\SocialNetworks;
use Illuminate\Http\Request;

class ModelsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function modelList()
    {
        $company = Company::where('id', 1)->first();
        $socialNetworks = SocialNetworks::where('company_id', $company->id)->get();
        $dresses = Dress::orderBy('id','desc')->paginate(6);

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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
