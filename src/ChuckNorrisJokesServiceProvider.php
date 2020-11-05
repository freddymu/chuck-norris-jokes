<?php

namespace Freddymu\ChuckNorrisJokes;

use Freddymu\ChuckNorrisJokes\Console\ChuckNorrisJoke;
use Illuminate\Support\ServiceProvider;

class ChuckNorrisJokesServiceProvider extends ServiceProvider
{
    public function boot()
    {
<<<<<<< HEAD
        if ($this->app->runningInConsole()) {
            $this->commands([
                ChuckNorrisJoke::class
            ]);
        }
=======
>>>>>>> 5997182740fdb3775b559a6a4047a5f474c7a426
    }

    public function register()
    {
        $this->app->bind('chuck-norris', function () {
            return new JokeFactory();
        });
    }
}
