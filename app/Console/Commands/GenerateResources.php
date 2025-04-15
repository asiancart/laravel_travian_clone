<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Resource;

class GenerateResources extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'resources:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate resources for all villages every minute';
    /**
     * Execute the console command.
     */
    public function handle()
    {
        foreach (Resource::all() as $resource) {
            $resource->increment('wood', 3);
            $resource->increment('clay', 2);
            $resource->increment('iron', 1);
            $resource->increment('crop', 4);
        }

        $this->info('Resources generated!');
    }
}
