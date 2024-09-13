<?php

namespace App\Http\Controllers;

use App\Models\DataPurchase;
use App\Models\DataPurchaseDetail;
use App\Models\Jasa;
use App\Models\Product;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

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

    public function getDataPurchase(Request $request)
    {

        if ($request->ajax()) {
            $datas = DB::table('v_purchase_product')->orderBy('tgl', 'DESC')->get();
            return DataTables::of($datas)
                ->addIndexColumn() //memberikan penomoran
                ->addColumn('action', function ($row) {
                    $btn = '<a href="/editPurchase/' . $row->hpurchaseId . '"  id="edit-purchase" data-id="' . $row->hpurchaseId . '|' . $row->dpurchaseId . '"class="btn btn-sm btn-primary edit-vendor mb-0" > <i class="fas fa-edit"></i> Edit</a>';
                    //  <a href="#" class="btn btn-sm btn-secondary disable"> <i class="fas fa-trash"></i> Hapus</a>';
                    return $btn;
                })
                ->rawColumns(['action'])   //merender content column dalam bentuk html
                ->escapeColumns()  //mencegah XSS Attack
                ->toJson(); //merubah response dalam bentuk Json
            // ->make(true);
        }
    }

    public function getDataPurchaseJasa(Request $request)
    {

        if ($request->ajax()) {
            $datas = DB::table('v_purchase_jasas')->orderBy('tgl', 'DESC')->get();
            return DataTables::of($datas)
                ->addIndexColumn() //memberikan penomoran
                ->addColumn('action', function ($row) {
                    $btn = '<a href="/editPurchase/' . $row->hpurchaseId . '"  id="edit-purchase" data-id="' . $row->hpurchaseId . '|' . $row->dpurchaseId . '"class="btn btn-sm btn-primary edit-vendor mb-0" > <i class="fas fa-edit"></i> Edit</a>';
                    //  <a href="#" class="btn btn-sm btn-secondary disable"> <i class="fas fa-trash"></i> Hapus</a>';
                    return $btn;
                })
                ->rawColumns(['action'])   //merender content column dalam bentuk html
                ->escapeColumns()  //mencegah XSS Attack
                ->toJson(); //merubah response dalam bentuk Json
            // ->make(true);
        }
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

    public function getProd(Request $request)
    {
        if ($request->category == "Barang") {
            $dtList = Product::query();
            foreach ($request->listP as $listP) {
                $dtList->orWhere('nama_barang', 'LIKE', '%' . $listP . '%');
            }

            $dtList = $dtList->get();
        }

        if ($request->category == "Jasa") {
            $dtList = Jasa::query();
            foreach ($request->listJ as $listJ) {
                $dtList->orWhere(DB::raw("CONCAT(`nama_jasa`,'-',`jenis_jasa`)"), 'LIKE', "%" . $listJ . "%");
            }

            $dtList = $dtList->get();
        }

        return response()->json($dtList);
    }

    public function simpanPurchase(Request $request)
    {
        $login = "System";
        // dd($request->all());
        $request->validate([
            'noPengajuan' => ['required', 'unique:data_purchases,no_pengajuan'],
        ]);

        if ($request->category == "Barang") {
            $jmProd = count($request->brg_id);
        }
        if ($request->category == "Jasa") {
            $jmProd = count($request->jasa_id);
        }

        if ($jmProd > 0) {

            $dataPurchase = DataPurchase::create([
                'no_pengajuan' => $request->noPengajuan,
                'tgl' => $request->tgl,
                'cost_center' => $request->costCenter,
                'branch' => $request->branch,
                'category' => $request->category,
                'no_vendor' => $request->noVendor,
                'login' => $login
            ]);

            if ($dataPurchase) {

                if ($request->category == "Barang") {

                    for ($x = 0; $x < count($request->brg_id); $x++) {
                        $listProd = explode("|", $request->brg_id[$x]);

                        $detailPurchase = DataPurchaseDetail::create([
                            'no_pengajuan' => $request->noPengajuan,
                            'br_id' => $listProd[0],
                            'qty' => $listProd[5],
                            'harga' => $listProd[6],
                            'login' => $login
                        ]);
                    }
                }

                if ($request->category == "Jasa") {

                    for ($x = 0; $x < count($request->jasa_id); $x++) {
                        $listProd = explode("|", $request->jasa_id[$x]);

                        $detailPurchase = DataPurchaseDetail::create([
                            'no_pengajuan' => $request->noPengajuan,
                            'br_id' => $listProd[0],
                            'qty' => $listProd[5],
                            'periode' => $listProd[6],
                            'start_date' => $listProd[7],
                            'harga' => $listProd[8],
                            'login' => $login
                        ]);
                    }
                }
            }

            return redirect()->route('data.purchase');
        }
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
