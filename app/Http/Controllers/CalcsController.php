<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcsController extends Controller
{
    public function result ($moris1, $operater, $moris2){
        switch($operater){
        case 'addition':
            $result = $moris1 + $moris2;
            break;
        
        case 'subtraction':
            $result = $moris1 - $moris2;
            break;
        
        case 'multiplication':
            $result = $moris1 * $moris2;
            break;

        case 'division':
            $result = $moris1/$moris2;
            break;
        }
    return view ("calcs_app", ["result" => $result]);
    }
}
