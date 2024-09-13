<?php

namespace App\Http\Controllers;

use App\Models\DataPurchase;
use App\Models\DataPurchaseDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EditPurchaseController extends Controller
{
    public function editPurchase($id)
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


        return view('data_master.purchase.editPurchase', compact('cost', 'branch', 'dtPurchase', 'dtPurchaseDet'));
    }

    public function updatePurchase(Request $request)
    {


        $login = "System";
        // dd($request->all());
        $request->validate([
            'noPengajuan' => 'required',
        ]);

        if ($request->category == "Barang") {
            $jmProd = count($request->brg_id);
        }
        if ($request->category == "Jasa") {
            $jmProd = count($request->jasa_id);
        }

        if ($jmProd > 0) {
            $UpdPurchase = DataPurchase::find($request->purId);
            $UpdPurchase->update([
                'no_pengajuan' => $request->noPengajuan,
                'tgl' => $request->tgl,
                'cost_center' => $request->costCenter,
                'branch' => $request->branch,
                'category' => $request->category,
                'no_vendor' => $request->noVendor,
                'updateBy' => $login
            ]);

            if ($UpdPurchase) {

                if ($request->category == "Barang") {
                    for ($x = 0; $x < count($request->brg_id); $x++) {
                        $listProd = explode("|", $request->brg_id[$x]);

                        $DelPurchaseDet = DataPurchaseDetail::where('no_pengajuan', $request->noPengajuan)->delete();

                        // if ($DelPurchaseDet) {
                        $PurchaseDet = DataPurchaseDetail::create([
                            'no_pengajuan' => $request->noPengajuan,
                            'br_id' => $listProd[0],
                            'qty' => $listProd[5],
                            'harga' => $listProd[6],
                            'login' => $login
                        ]);
                        // }
                    }
                }

                if ($request->category == "Jasa") {

                    for ($x = 0; $x < count($request->jasa_id); $x++) {
                        $listProd = explode("|", $request->jasa_id[$x]);

                        $DelPurchaseDet = DataPurchaseDetail::where('no_pengajuan', $request->noPengajuan)->delete();

                        // if ($DelPurchaseDet) {
                        $detailPurchase = DataPurchaseDetail::create([
                            'no_pengajuan' => $request->noPengajuan,
                            'br_id' => $listProd[0],
                            'qty' => $listProd[5],
                            'periode' => $listProd[6],
                            'start_date' => $listProd[7],
                            'harga' => $listProd[8],
                            'login' => $login
                        ]);
                        // }
                    }
                }
            }

            return redirect()->route('data.purchase');
        }
    }
}
