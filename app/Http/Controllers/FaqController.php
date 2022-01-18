<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class FaqController extends Controller
{
    public function index(){
        $isAdmin = Auth::user()->hasRole('Admin');
        return Inertia::render('FAQ/Main', ['isAdmin' => $isAdmin]);
    }
}
