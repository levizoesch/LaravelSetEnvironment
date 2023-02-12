<?php

namespace LeviZoesch\LaravelSetEnvironment;

use Illuminate\Support\ServiceProvider;
use LeviZoesch\LaravelSetEnvironment\SetEnvironmentVariable;

class SetEnvironmentVariableServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->commands([
            SetEnvironmentVariable::class
        ]);
    }
}
