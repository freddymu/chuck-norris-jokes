<?php

namespace Freddymu\ChuckNorrisJokes\Http\Controllers;

use Freddymu\ChuckNorrisJokes\Facades\ChuckNorris;

class ChuckNorrisController
{
    public function __invoke()
    {
        return ChuckNorris::getRandomJoke();
    }
}
