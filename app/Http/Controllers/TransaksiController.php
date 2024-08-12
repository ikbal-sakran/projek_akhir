<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;

class TransaksiController extends Controller
{
    // Create a new transaction
    public function createTransaksi(Request $request)
    {
        $validateData = $request->validate([
            'jumlah' => 'required',
            'jenis_transaksi' => 'required',
            'keterangan' => 'required',
            'metode_pembayaran' => 'required',

        ]);

        Transaksi::create([
            "jumlah" => $validateData['jumlah'],
            "jenis_transaksi" => $validateData['jenis_transaksi'],
            "keterangan" => $validateData['keterangan'],
            "metode_pembayaran" => $validateData['metode_pembayaran'],
        ]);

        return response()->json(['message' => 'Transaction create successfully'], 201);
    }

    // Retrieve all transactions
    public function getTransaksis()
    {
        $transaksis = Transaksi::all();
        return response()->json($transaksis, 200);
    }

    // Retrieve a specific transaction by ID
    public function getTransaksi($id)
    {
        $transaksi = Transaksi::find($id);

        if (!$transaksi) {
            return response()->json(['message' => 'Transaction not found'], 404);
        }

        return response()->json($transaksi, 200);
    }

    // Update a transaction
    public function updateTransaksi(Request $request, $id)
    {
        $validateData = $request->validate([
            'jumlah' => 'required|string',
            'jenis_transaksi' => 'sometimes|required|in:pemasukan,pengeluaran',
            'keterangan' => 'required|string',
            'metode_pembayaran' => 'sometimes|required|in:via_dana,antar_bank',
        ]);

        $transaksi = Transaksi::find($id);

        if (!$transaksi) {
            return response()->json(['message' => 'Transaction not found'], 404);
        }

        $transaksi->update($validateData);

        return response()->json(['message' => 'Transaction updated successfully'], 200);
    }

    // Delete a transaction
    public function deleteTransaksi($id)
    {
        $transaksi = Transaksi::find($id);

        if (!$transaksi) {
            return response()->json(['message' => 'Transaction not found'], 404);
        }

        $transaksi->delete();

        return response()->json(['message' => 'Transaction deleted successfully'], 200);
    }
}