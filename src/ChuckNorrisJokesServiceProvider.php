<?php

namespace Freddymu\ChuckNorrisJokes;

use Freddymu\ChuckNorrisJokes\Console\ChuckNorrisJoke;
use Freddymu\ChuckNorrisJokes\Http\Controllers\ChuckNorrisController;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class ChuckNorrisJokesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                ChuckNorrisJoke::class,
            ]);
        }

        Route::get('chuck-norris', ChuckNorrisController::class);
    }

    public function register()
    {
        $this->app->bind('chuck-norris', function () {
            return new JokeFactory();
        });
    }
}
