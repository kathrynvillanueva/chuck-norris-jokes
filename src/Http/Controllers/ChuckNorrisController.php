<?php

namespace Kathv\ChuckNorrisJokes\Http\Controllers;

use Kathv\ChuckNorrisJokes\Facades\ChuckNorris;

class ChuckNorrisController {

    public function __invoke() {
        return ChuckNorris::getRandomJoke();
    }

    public static function test() {
        return 'uyyyyyyyy';
    }
}