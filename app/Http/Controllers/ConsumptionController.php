<?php

namespace App\Http\Controllers;

use App\Models\Consumption;
use Illuminate\Http\Request;

class ConsumptionController extends Controller
{
    public function index()
    {
        // Ambil semua blog dari database
        $items = Consumption::all();
        $items = Consumption::where('published', true)->get();
        return view('pages.detailkonsumsi', compact('items')); // Kirim data ke view 'pages.home'
    }
}
