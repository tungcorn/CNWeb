<?php

namespace App\Http\Controllers;

use App\Models\SinhVien;
use Illuminate\Http\Request;

class SinhVienController extends Controller
{
    public function index()
    {
        $dsSinhvien = SinhVien::all();
        return view('sinhvien.list', compact('dsSinhvien'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        SinhVien::create($data);

        return redirect()->route('sinh-vien.index');
    }
}
