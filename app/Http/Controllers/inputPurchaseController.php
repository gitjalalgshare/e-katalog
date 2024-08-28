<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class inputPurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function dataPurchase()
    {
        return view('data_master.purchase.dataPurchase');
    }

    public function inputPurchase()
    {
        $cost = DB::table('cost_centers')->select('cost_center')->distinct()->get();
        $branch = DB::table('branches')->select('nama_branch')->distinct()->orderBy('nama_branch')->get();


        return view('data_master.purchase.inputPurchase', compact('cost', 'branch'));
    }

    public function getVendor(Request $request)
    {
        $category = $request->category;

        $vendor = Vendor::where('category', 'like', '%' . $category . '%')->get();

        return response()->json($vendor);
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
