<?php

namespace Freddymu\ChuckNorrisJokes\Http\Controllers;

use Freddymu\ChuckNorrisJokes\Facades\ChuckNorris;

class ChuckNorrisController
{
    public function __invoke()
    {
        return view('chuck-norris::joke', ['joke' => ChuckNorris::getRandomJoke()]);
        //return ChuckNorris::getRandomJoke();
    }
}
