<?php

namespace App\Http\Controllers;

use Carbon\Laravel\JnsServiceProvider;
use Illuminate\Http\Request;
use App\Models\jns_service;


class JnsServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = jns_service::get();
        // $data = jns_service::paginate(10);
        return view('JnsService.tampilJnsService', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //untuk menampilkan form
        return view('JnsService.tambahJnsService');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = new jns_service();
        $data->keterangan = $request->keterangan;
        $data->save();
        return redirect('JnsService');
    }

    /**
     * Display the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = jns_service::where('id', '=', $id)->get();
        return view('JnsService.editJnsService', compact('data', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function update(Request $request, string $id)
    {
        //
        $data = jns_service::where('id', '=', $id);
        $data->update([
            'keterangan' => $request->keterangan,
        ]);
        return redirect('JnsService');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data = jns_service::where('id', '=', $id);
        $data->delete();
        return redirect('JnsService');
    }
}
