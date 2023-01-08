<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'service' => 'required',
            'satuan' => 'required',
            'jumlah' => 'required',
            'harga' => 'required',
            'description' => 'required'
        ]);

        Service::create([
            'service' => $request->service,
            'satuan' => $request->satuan,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga,
            'description' => $request->description,
        ]);




        return redirect('/service')->with('success', 'Berhasil menambahkan service');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'service' => 'required',
            'satuan' => 'required',
            'jumlah' => 'required',
            'harga' => 'required',
            'description' => 'required'
        ]);


        $service = Service::find($id);
        $service->update([
            'service' => $request->service,
            'satuan' => $request->satuan,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga,
            'description' => $request->description,
        ]);
        return redirect('/service')->with('success', 'service berhasil diupdate');
    }

    public function destroy($id)
    {
        $service = Service::find($id);
        $service->delete();
        return redirect('/service')->with('success', 'Service berhasil dihapus');
    }
}
