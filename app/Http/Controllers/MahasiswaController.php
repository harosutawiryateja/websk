<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    private $data = [
        [
            'nim' => "123456",
            'nama' => "I Putu satu",
            'mata_kuliah' => "web programing",
        ],
        [
            'nim' => "234567",
            'nama' => "I Wayan dua",
            'mata_kuliah' => "server administasi",
        ],
        [
            'nim' => "345678",
            'nama' => "I Ketut tiga",
            'mata_kuliah' => "machine learning",
        ],
        [
            'nim' => "456789",
            'nama' => "I Kadek empat",
            'mata_kuliah' => "microposesor",
        ],
    ];

    public function index()
    {
        return view('mahasiswa.index', ['data' => $this->data]);
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function edit($id)
    {
        return view('mahasiswa.edit', ['data' => $this->data[$id], 'id' => $id]);
    }

    public function show($id)
    {
    }
}
