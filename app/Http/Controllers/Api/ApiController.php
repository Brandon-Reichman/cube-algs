<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class ApiController extends Controller
{
    public function api(): JsonResponse
    {
        return response()->json(['ok']);
    }
}
