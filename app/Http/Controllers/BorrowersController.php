<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class BorrowersController extends Controller
{
    public function list(): Response
    {
        return Inertia::render('Borrowers');
    }
}
