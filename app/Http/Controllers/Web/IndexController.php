<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class IndexController extends Controller
{
    function index(): View
    {
        $data = [
            'data from php',
            'algs!',
        ];

        return view('app', [
            'data' => $data
        ]);
    }
}
