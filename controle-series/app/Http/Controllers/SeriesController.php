<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = [
            'Baki',
            'Sandman',
            'Grey\'s Anatomy'
        ];

        return view('lista-series', [
            'series' => $series
        ]);

    }
}
