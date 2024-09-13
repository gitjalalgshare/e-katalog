<?php

namespace App\Http\Controllers;

use App\Models\Jasa;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class InputJasaController extends Controller
{
    public function data_jasa()
    {
        return view('data_master.jasa.dataJasa');
    }

    public function getDataJasa(Request $request)
    {

        if ($request->ajax()) {
            $datas = Jasa::all();
            return DataTables::of($datas)
                ->addIndexColumn() //memberikan penomoran
                ->addColumn('fotoProduct', function ($row) {
                    $url = asset("storage/image-brg/$row->foto_product");
                    return '<img src="' . $url . '" align="center" style="width: 40px;height:40px;" />';
                })
                ->addColumn('action', function ($row) {
                    $btn = '<a href="/editDataJasa/' . $row->id . '" class="btn btn-sm btn-primary edit-jasa" > <i class="fas fa-edit"></i> Edit</a>';
                    //  <a href="#" class="btn btn-sm btn-secondary disable"> <i class="fas fa-trash"></i> Hapus</a>';
                    return $btn;
                })
                ->rawColumns(['fotoProduct', 'action'])   //merender content column dalam bentuk html
                ->escapeColumns()  //mencegah XSS Attack
                ->toJson(); //merubah response dalam bentuk Json
            // ->make(true);
        }
    }

    public function input_jasa()
    {

        return view('data_master.jasa.inputJasa');
    }

    public function simpan_jasa(Request $request)
    {

        // dd($request->all());

        $request->validate([
            // 'foto_produce' => ['mimes:jpg,png,jpeg'],
        ]);

        Jasa::create([
            'kategori_jasa' => $request->kategoriJasa,
            'nama_jasa' => $request->namaJasa,
            'jenis_jasa' => $request->jenisJasa,
            'type_jasa' => $request->typeJasa,
            'uom' => $request->uom
        ]);

        return redirect()->route('data.jasa');
    }

    public function editDataJasa($id)
    {
        $dataJasa = Jasa::find($id);

        return view('data_master.jasa.editJasa', ['dataJasa' => $dataJasa]);
    }

    public function updateDataJasa(Request $request, $id)
    {
        $jasa = Jasa::find($id);

        $request->validate([
            // 'foto_product' => ['mimes:jpg,png,jpeg'],
        ]);

        $jasa->kategori_jasa = $request->kategoriJasa;
        $jasa->nama_jasa = $request->namaJasa;
        $jasa->jenis_jasa = $request->jenisJasa;
        $jasa->type_jasa = $request->typeJasa;
        $jasa->uom = $request->uom;
        $jasa->save();

        return view('data_master.jasa.dataJasa');
    }
}
