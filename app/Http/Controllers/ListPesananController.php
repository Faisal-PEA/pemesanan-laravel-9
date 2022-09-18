<?php

namespace App\Http\Controllers;

use App\DataTables\ListPesananDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yazra\DataTables\DataTables;
use App\Models\ListPesanan;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;

class ListPesananController extends Controller
{
    // public function index()
    // {
    //     return view('admin/pesanan');
    // }
    public function index(Request $request)
    {
        $data = ListPesanan::limit(1000)->get();
        return view('admin.index', compact('data'));
        return DataTables::of(ListPesanan::limit(5))->make(true);
    }

    // public function json()
    // {
    //     return DataTables::of(ListPesanan::limit(1))->make(true);
    // }

    public function fileExport()
    {
        return Excel::download(new UsersExport, 'data-pesanan.xlsx');
    }
}
