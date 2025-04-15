<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\ServiceProvider;
use App\Models\Village;
use App\Models\Resource;
use App\Models\Building;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
{
    Event::listen(Registered::class, function ($event) {
        $user = $event->user;
    
        $x = rand(-50, 50);
        $y = rand(-50, 50);
    
        $village = \App\Models\Village::create([
            'user_id' => $user->id,
            'name' => $user->name . "'s Village",
            'x' => $x,
            'y' => $y,
        ]);
    
        // Kaynakları oluştur
        Resource::create([
            'village_id' => $village->id,
        ]);

        Building::create([
            'village_id'=>$village->id,
            'type' =>'main',
            'level' => 1,
        ]);

        Building::create([
            'village_id' => $village->id,
            'type' => 'barracks',
            'level' => 0,
        ]);

    });
}
}
