<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();

        try {
            return response()->json(['status' => true, 'message' => 'Succes', 'data' => $users]);
        } catch (\Throwable $th) {
            return response()->json(['status' => false, 'message' => 'False']);
        }
    }
}
