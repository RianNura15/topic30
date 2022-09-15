<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::with('kelas')->get();
        $paginate = Mahasiswa::orderBy('id', 'asc')->paginate(3);
        return view('', ['mahasiswa' => $mahasiswa, 'paginate' => $paginate]);
    }
}
