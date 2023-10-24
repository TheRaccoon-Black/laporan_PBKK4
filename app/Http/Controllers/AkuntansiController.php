<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_Transaksi;
use App\Models\M_Detail;

class AkuntansiController extends Controller
{
    public function index()
    {
        
        $data = M_Transaksi::all();
        return view("Index")->with(["data" => $data]);
        
    }

    public function create()
    {
        return view("create");
    }

    // public function store(Request $request)
    // {
    //     $dataTransaksi = $request->except(['_token']);
    //     $transaksi = M_Transaksi::create($dataTransaksi);

    //     $dataDetail = [
    //         'keterangan' => $request->input('keterangan_detail'),
    //         'dk' => $request->input('dk'),
    //         'jumlah' => $request->input('jumlah_detail'),
    //         'm_transaksi_id' => $transaksi->id,
    //     ];

    //     $transaksi->details()->create($dataDetail);

    //     return redirect('/');
    // }
//     public function store(Request $request)
// {
//     // Log atau dd() untuk memeriksa data
//     \Log::info('Data Transaksi: ' . json_encode($request->except(['_token'])));
    
//     $dataTransaksi = $request->except(['_token']);
//     $transaksi = M_Transaksi::create($dataTransaksi);

//     $dataDetail = [
//         'keterangan' => $request->input('keterangan_detail'),
//         'dk' => $request->input('dk'),
//         'jumlah' => $request->input('jumlah_detail'),
//         'm_transaksi_id' => $transaksi->id,
//     ];

//     // Log atau dd() untuk memeriksa data detail
//     \Log::info('Data Detail: ' . json_encode($dataDetail));

//     $transaksi->details()->create($dataDetail);

//     return redirect('/');
// }
public function store(Request $request)
{
    $request->validate([
        'keterangan' => 'required',
        // ... tambahkan aturan validasi lainnya
    ]);

    $dataTransaksi = $request->except(['_token']);
    $dataTransaksi['keterangan'] = $request->input('keterangan'); // Pastikan nilai 'keterangan' sudah ada
    $transaksi = M_Transaksi::create($dataTransaksi);

    $dataDetail = [
        'keterangan' => $request->input('keterangan_detail'),
        'dk' => $request->input('dk'),
        'jumlah' => $request->input('jumlah_detail'),
        'm_transaksi_id' => $transaksi->id,
    ];

    $transaksi->details()->create($dataDetail);

    return redirect('/');
}


    public function show($id)
    {
        $data = M_Transaksi::findOrFail($id);
        return view("show")->with(["data" => $data]);
    }

    public function edit($id)
    {
        $data = M_Transaksi::findOrFail($id);
        return view("edit")->with(["data" => $data]);
    }

    public function update(Request $request, $id)
    {
        $transaksi = M_Transaksi::findOrFail($id);
        $dataTransaksi = $request->except(['_token']);
        $transaksi->update($dataTransaksi);

        $dataDetail = [
            'keterangan' => $request->input('keterangan_detail'),
            'dk' => $request->input('dk'),
            'jumlah' => $request->input('jumlah_detail'),
        ];

        $transaksi->details()->update($dataDetail);

        return redirect('/');
    }

    public function destroy($id)
    {
        $transaksi = M_Transaksi::findOrFail($id);

        $transaksi->details()->delete();

        $transaksi->delete();
        return redirect('/');
    }
}
