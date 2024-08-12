<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormulaireController extends Controller
{
    // Affiche le formulaire
    public function formulaire()
    {
        return view('formulaire');
    }

}
