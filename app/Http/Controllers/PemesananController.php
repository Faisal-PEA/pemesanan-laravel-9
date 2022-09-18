<?php

namespace App\Http\Controllers;


use App\Models\ModelPemesanan;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function save(Request $r)
    {
        $fb = $r->fb;
        $namaasli = $r->namaasli;
        $alamat = $r->alamat;
        $wa = $r->wa;

        $pesan = new ModelPemesanan;
        $pesan->fb = $fb;
        $pesan->namaasli = $namaasli;
        $pesan->alamat = $alamat;
        $pesan->wa = $wa;
        $pesan->save();

        toast('Your Post as been submited!', 'success');
        return redirect('/');
    }
}
