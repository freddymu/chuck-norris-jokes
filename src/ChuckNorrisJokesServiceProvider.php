<?php

namespace Freddymu\ChuckNorrisJokes;

use Illuminate\Support\ServiceProvider;
use Freddymu\ChuckNorrisJokes\JokeFactory;

class ChuckNorrisJokesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        
    }

    public function register()
    {
        $this->app->bind('chuck-norris', function(){
            return new JokeFactory();
        });
    }
}
