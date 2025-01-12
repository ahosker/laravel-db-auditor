<?php

namespace Vcian\LaravelDBAuditor\Providers;

use Illuminate\Support\ServiceProvider;

class DBAuditorServiceProvider extends ServiceProvider
{
    protected array $commands = [
        'Vcian\LaravelDBAuditor\Commands\DBAuditCommand',
        'Vcian\LaravelDBAuditor\Commands\DBStandardCommand',
        'Vcian\LaravelDBAuditor\Commands\DBConstraintCommand'
    ];

    /**
     * Register services.
     */
    public function register(): void
    {
        $this->commands($this->commands);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../views', 'DBAuditor');
        $this->loadTranslationsFrom(__DIR__ . '/../Lang/', 'Lang');
    }
}
