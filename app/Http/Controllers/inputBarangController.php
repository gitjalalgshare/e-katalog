<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
// use Yajra\DataTables\DataTables;
use Yajra\DataTables\DataTables;

class inputBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function data_barang()
    {
        $dataBarang = Product::all();

        return view('data_master.barang.dataBarang', ['dataBarang' => $dataBarang]);
    }

    public function getDataBarang(Request $request)
    {

        if ($request->ajax()) {
            $datas = Product::all();
            return DataTables::of($datas)
                ->addIndexColumn() //memberikan penomoran
                ->addColumn('fotoProduct', function ($row) {
                    $url = asset("storage/image-brg/$row->foto_product");
                    return '<img src="' . $url . '" align="center" style="width: 40px;height:40px;" />';
                })
                ->addColumn('action', function ($row) {
                    $btn = '<a href="/editDataBarang/' . $row->id . '" class="btn btn-sm btn-primary edit-barang" > <i class="fas fa-edit"></i> Edit</a>';
                    //  <a href="#" class="btn btn-sm btn-secondary disable"> <i class="fas fa-trash"></i> Hapus</a>';
                    return $btn;
                })
                ->rawColumns(['fotoProduct', 'action'])   //merender content column dalam bentuk html
                ->escapeColumns()  //mencegah XSS Attack
                ->toJson(); //merubah response dalam bentuk Json
            // ->make(true);
        }
    }

    public function input_barang()
    {
        return view('data_master.barang.inputBarang');
    }


    public function simpan_barang(Request $request)
    {

        // dd($request->all());

        $request->validate([
            'foto_produce' => ['mimes:jpg,png,jpeg'],
        ]);

        if ($request->hasFile('foto_product')) {
            // $file = $request->file('foto_product')->getClientOriginalName();
            // $extension = $request->file('foto_product')->getClientOriginalExtension();
            // $fileName = $file.'_'.time().'.'.$extension;
            // $request->file('foto_product')->move(public_path('storage/image-brg'), $fileName);

            $file = $request->file('foto_product');
            $fileName = $file->hashName();

            $request->file('foto_product')->move(public_path('storage/image-brg'), $fileName);
        } else {
            $fileName = 'foto-blank.jpg';
        }

        Product::create([
            'nama_barang' => $request->namaBarang,
            'merk' => $request->merkBarang,
            'type' => $request->typeBarang,
            'uom' => $request->uom,
            'foto_product' => $fileName
        ]);

        return redirect()->route('data.barang');
    }


    public function editDataBarang($id)
    {

        // dd($id);

        $dataBarang = Product::find($id);

        return view('data_master.barang.editBarang', ['dataBarang' => $dataBarang]);
    }


    public function updateDataBarang(Request $request, $id)
    {
        // dd($request->all(), $id);

        $product = Product::find($id);

        $request->validate([
            'foto_product' => ['mimes:jpg,png,jpeg'],
        ]);

        if ($request->hasFile('foto_product')) {
            $file = $request->file('foto_product');
            $fileName = $file->hashName();

            $request->file('foto_product')->move(public_path('storage/image-brg'), $fileName);

            if ($product->foto_product) {
                unlink(public_path('storage/image-brg/' . $product->foto_product));
            }
        } else {
            $fileName = 'foto-blank.jpg';
        }

        $product->nama_barang = $request->namaBarang;
        $product->merk = $request->merkBarang;
        $product->type = $request->typeBarang;
        $product->uom = $request->uom;
        $product->foto_product = $fileName;
        $product->save();


        return view('data_master.barang.dataBarang');
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
