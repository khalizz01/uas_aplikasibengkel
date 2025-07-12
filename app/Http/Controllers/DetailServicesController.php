<?php

namespace App\Http\Controllers;

use App\Models\DetailServices;
use Illuminate\Http\Request;


class DetailServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // $data = DetailServices::get();
        $data = DetailServices::paginate(10);
        return view('detailServices.tampilDetailServices', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('detailServices.tambahDetailServices');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = new DetailServices();
        $data->sparepart = $request->sparepart;
        $data->harga = $request->harga;
        $data->save();
        return redirect('detailservices');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = DetailServices::where('id', '=', $id)->get();
        return view('detailServices.editDetailServices', compact('data', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data = DetailServices::where('id', '=', $id);
        $data->update([
            'sparepart' => $request->sparepart,
            'harga' => $request->harga,
        ]);
        return redirect('detailservices');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data = DetailServices::where('id', '=', $id);
        $data->delete();
        return redirect('detailservices');
    }
}
