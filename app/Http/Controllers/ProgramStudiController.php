<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramStudiController extends Controller
{
    public function manajemenInformatika() {
        return view('ProgramStudi.manajemenInformatika');
    }

    public function teknikInformatika() {
        return view('ProgramStudi.teknikInformatika');
    }
}