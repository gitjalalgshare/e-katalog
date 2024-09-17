<?php

namespace App\Http\Controllers;

use App\Models\DataPurchase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class katalogBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function katalogBarang()
    {
        return view('data_katalog.dataKatalogBarang');
    }

    public function getDataPurchaseBarang(Request $request)
    {

        if ($request->ajax()) {
            $datas = DB::table('v_purchase_product')->orderBy('tgl', 'DESC')->get();
            return DataTables::of($datas)
                ->addIndexColumn() //memberikan penomoran
                ->addColumn('action', function ($row) {
                    $btn = '<a href="/showPurchase/' . $row->hpurchaseId . '"  id="show-purchase" data-id="' . $row->hpurchaseId . '|' . $row->dpurchaseId . '"class="btn btn-sm btn-primary show-purchse mb-0" > <i class="fas fa-edit"></i> Detail</a>';
                    //  <a href="#" class="btn btn-sm btn-secondary disable"> <i class="fas fa-trash"></i> Hapus</a>';
                    return $btn;
                })
                ->rawColumns(['action'])   //merender content column dalam bentuk html
                ->escapeColumns()  //mencegah XSS Attack
                ->toJson(); //merubah response dalam bentuk Json
            // ->make(true);
        }
    }

    public function showPurchase($id)
    {

        $dtPurchase = DataPurchase::findOrFail($id);

        if ($dtPurchase->category == "Barang") {
            $dtPurchaseDet = DB::table('v_purchase_product')->where('hpurchaseId', $dtPurchase->id)->get();
        }

        if ($dtPurchase->category == "Jasa") {
            $dtPurchaseDet = DB::table('v_purchase_jasas')->where('hpurchaseId', $dtPurchase->id)->get();
        }


        $cost = DB::table('cost_centers')->select('cost_center')->distinct()->get();
        $branch = DB::table('branches')->select('nama_branch')->distinct()->orderBy('nama_branch')->get();


        return view('data_katalog.detailKatalogBarang', compact('cost', 'branch', 'dtPurchase', 'dtPurchaseDet'));
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
