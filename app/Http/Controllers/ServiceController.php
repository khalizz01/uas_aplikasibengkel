<?php

namespace App\Http\Controllers;

use Carbon\Laravel\ServiceProvider;
use Illuminate\Http\Request;
use App\Models\service;


class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = service::get();
        // $data = service::paginate(10);
        return view('Service.tampilServices', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //untuk menampilkan form
        return view('Service.tambahServices');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = new service();
        $data->keluhan = $request->keluhan;
        $data->tgl_masuk = $request->tgl_masuk;
        $data->tgl_keluar = $request->tgl_keluar;
        $data->save();
        return redirect('Service');
    }

    /**
     * Display the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = service::where('id', '=', $id)->get();
        return view('Service.editService', compact('data', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function update(Request $request, string $id)
    {
        //
        $data = service::where('id', '=', $id);
        $data->update([
            'keluhan' => $request->keluhan,
            'tgl_masuk' => $request->tgl_masuk,
            'tgl_keluar' => $request->tgl_keluar,
        ]);
        return redirect('Service');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data = Service::where('id', '=', $id);
        $data->delete();
        return redirect('Service');
    }
}
