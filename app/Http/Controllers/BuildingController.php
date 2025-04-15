<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Building;
use App\Models\Resource;


class BuildingController extends Controller
{
    public function upgrade($id)
{
    $building = Building::findOrFail($id);
    $village = $building->village;
    $resources = $village->resource;

    // Her seviye için kaynak maliyeti:
    $cost = [
        'wood' => 20 * ($building->level + 1),
        'clay' => 15 * ($building->level + 1),
        'iron' => 10 * ($building->level + 1),
        'crop' => 5 * ($building->level + 1),
    ];

    // Kaynaklar yeterli mi kontrol
    if (
        $resources->wood >= $cost['wood'] &&
        $resources->clay >= $cost['clay'] &&
        $resources->iron >= $cost['iron'] &&
        $resources->crop >= $cost['crop']
    ) {
        // Kaynakları düş
        $resources->decrement('wood', $cost['wood']);
        $resources->decrement('clay', $cost['clay']);
        $resources->decrement('iron', $cost['iron']);
        $resources->decrement('crop', $cost['crop']);

        // Seviyeyi artır
        $building->increment('level');
    }

    return redirect()->back();
}
}
