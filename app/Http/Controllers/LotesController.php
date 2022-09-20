<?php

namespace App\Http\Controllers;

use App\Models\Lote;
use Illuminate\Http\Request;

class LotesController extends Controller
{
    public function index() {
        $lotes = Lote::all();
        return view('lotes', ['lotes'=>$lotes]);
    }
}
