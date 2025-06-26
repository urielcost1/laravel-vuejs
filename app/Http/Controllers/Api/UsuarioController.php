<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class UsuarioController extends Controller
{
    public function index(): JsonResponse
    {
        $usuarios = [
            ['id' => 1, 'nome' => 'Bruno Jammal', 'email' => 'bruno@example.com'],
            ['id' => 2, 'nome' => 'Uriel Silva', 'email' => 'uriel@example.com'],
            ['id' => 3, 'nome' => 'Rony Júnior', 'email' => 'rony@example.com'],
        ];

        return response()->json($usuarios);
    }
}
