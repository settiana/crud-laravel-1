<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;

class PertanyaanController extends Controller
{
    public function index()
    {
        $pertanyaans = PertanyaanModel::get_all();
         
        return view('pertanyaan.index', compact('pertanyaans'));
    }

    public function create()
    {
        return view('pertanyaan.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);
        $pertanyaan = PertanyaanModel::save($data);
        if ($pertanyaan) {
            return redirect('/pertanyaan');
        }
    }
}
