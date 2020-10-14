<?php

namespace App\Http\Controllers;

use App\Stage;
use Illuminate\Http\Request;

class StageController extends Controller
{

    public function getStage($id){
        $stage = Stage::firstOrFail($id);

    }
}
