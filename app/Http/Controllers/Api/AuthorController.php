<?php

namespace App\Http\Controllers\Api;

use App\Author;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $Authors=Author::paginate(10);
        return response()->json($Authors);
    }
    public function show($id)
    {
        $Author=Author::findOrFail($id);
        return response()->json($Author);
    }
}
