<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\UnitRumah;

class ProductController extends Controller
{
    function CreateUnit(Request $req)
    {
        try {
            $unit = new UnitRumah;
            $unit->kavling = $req->input('kavling');
            $unit->blok = $req->input('blok');
            $unit->no_rumah = $req->input('no_rumah');
            $unit->harga_rumah = $req->input('harga_rumah');
            $unit->luas_tanah = $req->input('luas_tanah');
            $unit->luas_bangunan = $req->input('luas_bangunan');
            $unit->save();
            return response()->json(['message' => 'Succesfully Create Unit'], 200);
        } catch (Exception $e) {
            return response()->json(['message' => 'Failed Create Unit'], 500);
        }

    }
    function DeleteUnit(Request $req)
    {
        $unitId = $req->input('id');
        $unit = DB::delete('delete from unit_rumahs where id=' . $unitId . '');
    }
}
