<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HeadHome;
use Illuminate\Support\Facades\DB;

class ServiceFeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataHeadHomes = DB::table('service_features')->get();

        // หากมีข้อมูลใน table ให้โยนไปที่ index
        return view('backend.serviceFeature.index', ['dataHeadHomes' => $dataHeadHomes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.serviceFeature.create');
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