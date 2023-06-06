<?php

namespace App\Actions\Dashboard;

use Lorisleiva\Actions\Concerns\AsAction;
use Lorisleiva\Actions\Concerns\AsController;
use Inertia\Inertia;
use Illuminate\Routing\Router;

class Show
{
    use AsAction, AsController;

    public function handle()
    {
        return Inertia::render('Dashboard');
    }

    public static function routes(Router $router)
    {
        $router->get('dashboard', static::class)->middleware(['auth']);
    }
}
