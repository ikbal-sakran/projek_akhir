<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Hutang_Piutang;

class HutangPiutangController extends Controller
{
    // Create a new event
    public function createHutangPiutang(Request $request)
    {
        $validateData = $request->validate([
            "nama_event" => "required",
            "jatuh_tempo_hutang_piutang" => "required",
            "nominal_hutang_piutang" => "required",
            "status_hutang_piutang" => "required",
            "pihak_kedua_hutang_piutang" => "required",
          
        ]);

        hutang_piutang::create([
            "nama_event" => $validateData['nama_event'],
            "jatuh_tempo_hutang_piutang" => $validateData['jatuh_tempo_hutang_piutang'],
            "pihak_kedua_hutang_piutang" => $validateData['pihak_kedua_hutang_piutang'],
            "nominal_hutang_piutang" => $validateData['nominal_hutang_piutang'],
            "status_hutang_piutang" => $validateData['status_hutang_piutang'],
          
        ]);

        return response()->json(['message' => 'Hutang Piutang created successfully'], 201);
    }
// Retrieve all events
public function getHutangpiutang()
{
    $HutangPiutangs = Hutang_Piutang::all();
    return response()->json($HutangPiutangs, 200);
}

// Retrieve a specific event by ID
public function getHutangpiutangs($id)
{
    $HutangPiutangs = Hutang_Piutang::find($id);

    if (!$HutangPiutangs) {
        return response()->json(['message' => 'Event not found'], 404);
    }

    return response()->json($HutangPiutangs, 200);
}
 // Update an event
 public function updateHutangPiutang(Request $request, $id)
 {
     $validateData = $request->validate([
        "nama_event" => "required",
        "jatuh_tempo_hutang_piutang" => "required",
        "nominal_hutang_piutang" => "required",
        "status_hutang_piutang" => "required",
        "pihak_kedua_hutang_piutang" => "required",
     ]);

     $HutangPiutangs = Hutang_Piutang::find($id);

     if (!$HutangPiutangs) {
         return response()->json(['message' => 'hutangpiutang not found'], 404);
     }

     $HutangPiutangs->update($validateData);

     return response()->json(['message' => 'hutang piutang updated successfully'], 200);
 }

 // Delete an event
 public function deleteHutangPiutang($id)
 {
     $HutangPiutang = Hutang_Piutang::find($id);

     if (!$HutangPiutang) {
         return response()->json(['message' => 'hutang piutang not found'], 404);
     }

     $HutangPiutang->delete();

     return response()->json(['message' => 'hutang piutang deleted successfully'], 200);
 }

}