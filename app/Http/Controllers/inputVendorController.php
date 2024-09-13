<?php

namespace App\Http\Controllers;

use App\Models\Jasa;
use App\Models\Product;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class inputVendorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function data_vendor()
    {
        return view('data_master.vendor.dataVendor');
    }

    public function getDataVendor(Request $request)
    {

        if ($request->ajax()) {
            $datas = Vendor::all();
            return DataTables::of($datas)
                ->addIndexColumn() //memberikan penomoran
                ->addColumn('action', function ($row) {
                    $btn = '<a href="javascript:void(0)"  id="edit-vendor" data-id="' . $row->id . '"class="btn btn-sm btn-primary edit-vendor mb-0" > <i class="fas fa-edit"></i> Edit</a>';
                    //  <a href="#" class="btn btn-sm btn-secondary disable"> <i class="fas fa-trash"></i> Hapus</a>';
                    return $btn;
                })
                ->rawColumns(['action'])   //merender content column dalam bentuk html
                ->escapeColumns()  //mencegah XSS Attack
                ->toJson(); //merubah response dalam bentuk Json
            // ->make(true);
        }
    }

    public function getBarangJasa(Request $request)
    {
        $category = $request->filCategory;

        $product = Product::select('nama_barang')->distinct()->get();
        $jasa = Jasa::select('nama_jasa', 'jenis_jasa')->distinct()->get();

        return response()->json(['product' => $product, 'jasa' => $jasa]);
    }

    public function getAutoNo(Request $request)
    {
        $latest = Vendor::latest()->first();
        $last_num = explode('-', $latest->no_vendor);

        $tgl = date("Ymd");

        if (! $latest) {
            return 'VNDR-' . $tgl . '-0001';
        }

        // $string = preg_replace("/[^0-9\.]/", '', $latest->no_vendor);
        $noVendor = 'VNDR-' . $tgl . '-' . (str_pad((int)$last_num[2] + 1, 4, '0', STR_PAD_LEFT));

        return $noVendor;
    }

    public function simpanVendor(Request $request)
    {
        $login = "System";

        $latest = Vendor::latest()->first();
        $last_num = explode('-', $latest->no_vendor);

        $tgl = date("Ymd");

        if (! $latest) {
            $nomor = 'VNDR-' . $tgl . '-0001';
        } else {
            $nomor =
                'VNDR-' . $tgl . '-' . (str_pad((int)$last_num[2] + 1, 4, '0', STR_PAD_LEFT));
        }

        $listProduct = "-";
        $listJasa = "-";
        if ($request->listProduct != Null) {
            if (count($request->listProduct) > 0) {
                $listProduct = implode(",", $request->listProduct);
            }
        }

        if ($request->listJasa != Null) {
            if (count($request->listJasa) > 0) {
                $listJasa = implode(",", $request->listJasa);
            }
        }


        Vendor::create([
            'no_vendor' => $nomor,
            'jenis_vendor' => $request->jenisVendor,
            'nama_vendor' => $request->namaVendor,
            'alamat' => $request->alamatVendor,
            'contact_person' => $request->cpVendor,
            'no_telp' => $request->telpVendor,
            'npwp' => $request->npwpVendor,
            'status_pkp' => $request->statusPkp,
            'category' => $request->category,
            'list_product' => $listProduct,
            'list_jasa' => $listJasa,
            'input_by' => $login

        ]);

        return redirect()->route('data.vendor');
    }

    public function editDataVendor(Request $request)
    {
        $dVendor = Vendor::findOrFail($request->id);

        return response()->json($dVendor);
    }

    public function updateDataVendor(Request $request)
    {
        $update = "System";

        $listProduct = "-";
        $listJasa = "-";
        if ($request->listProductEdt != Null) {
            if (count($request->listProductEdt) > 0) {
                $listProduct = implode(",", $request->listProductEdt);
            }
        }

        if ($request->listJasaEdt != Null) {
            if (count($request->listJasaEdt) > 0) {
                $listJasa = implode(",", $request->listJasaEdt);
            }
        }

        $EdtVendor = Vendor::find($request->noVendorEdtId);

        $EdtVendor->update([
            'jenis_vendor' => $request->jenisVendorEdt,
            'nama_vendor' => $request->namaVendorEdt,
            'alamat' => $request->alamatVendorEdt,
            'contact_person' => $request->cpVendorEdt,
            'no_telp' => $request->telpVendorEdt,
            'npwp' => $request->npwpVendorEdt,
            'status_pkp' => $request->statusPkpEdt,
            'category' => $request->categoryEdt,
            'list_product' => $listProduct,
            'list_jasa' => $listJasa,
            'update_by' => $update
        ]);

        return redirect()->route('data.vendor');
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
