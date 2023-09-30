<?php

namespace App\Http\Controllers;

use App\Models\Bidang;
use Illuminate\Http\Request;

class BidangController extends Controller
{
    public function index()
    {
        $bidangs = Bidang::all();

        return view('dashboard.userDashboard', ['bidangs' => $bidangs]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_bidang' => 'required',
        ]);

        Bidang::create($request->all());

        // return redirect()->route('bidang.index')->with('success', 'Bidang berhasil ditambahkan');
        return redirect('/');
    }
}