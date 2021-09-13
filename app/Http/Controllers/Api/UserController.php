<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;
use Auth;

class UserController extends Controller
{
    public function index()
    {

        $loggedUser = Auth::user();

        return response()->json([
            'users' => User::where('id', '!=', $loggedUser->id)->get(),
            'status' => Response::HTTP_OK
        ], Response::HTTP_OK);
    }
}
