<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\book;
use App\Author;


class BookController extends Controller
{
    public function index()
    {
        $books=book::all();
        return response()->json($books);
    }
}
