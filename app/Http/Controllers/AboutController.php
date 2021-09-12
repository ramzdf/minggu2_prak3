<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about() {
        return "Jl. Soekarno-Hatta No. 9 Malang 65141 <br>
        Po.Box 04 Malang <br>
        Telepon : +62 (0341) 404424 – 404425 <br>
        Faks : +62 (0341) 404420";
    }
}
