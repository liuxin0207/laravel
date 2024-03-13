<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Inertia\Inertia;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index() {
        $books = Book::get();
        $data = [
            'book' => $books,
            'count' => 5,
            'tittle' => '黃昏書店',
        ];
        return Inertia::render('Test',[
            'response' => $data,
        ]);
    }
    public function create(){
        
    }
}
