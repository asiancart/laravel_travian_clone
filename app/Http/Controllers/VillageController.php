<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Village;

class VillageController extends Controller
{
    public function showVillage()
{
    $village = Village::with(['resource', 'buildings'])->where('user_id', auth()->id())->first();
    return view('village', compact('village'));
}
}
