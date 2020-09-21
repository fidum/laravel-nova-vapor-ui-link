<?php

namespace Fidum\NovaVaporUILink;

use Illuminate\Support\Facades\Gate;
use Laravel\Nova\Tool;

class VaporUILink extends Tool
{
    const VIEW_NAME = 'laravel-nova-vapor-ui-link::navigation';

    protected $label;

    protected $target;

    public function __construct(?string $label = 'Vapor UI', string $target = 'self')
    {
        parent::__construct();

        $this->label = $label;
        $this->target = $target;
    }

    public function boot()
    {
        view()->composer(self::VIEW_NAME, function ($view) {
            $view->with('label', $this->label);
            $view->with('target', $this->target);
        });

        $this->canSee(function ($request) {
            return app()->environment('local') || Gate::check('viewVaporUI', [$request->user()]);
        });
    }

    public function renderNavigation()
    {
        return view(self::VIEW_NAME);
    }

    public function target(string $target)
    {
        $this->target = $target;

        return $this;
    }
}
