<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\book;


class BookController extends Controller
{
    public function index()
    {
        $books=book::with(['Author'])->get();
        return response()->json($books);
    }
}
