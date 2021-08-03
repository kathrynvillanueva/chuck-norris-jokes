<?php

namespace Kathv\ChuckNorrisJokes;

use Illuminate\Support\ServiceProvider;
use Kathv\ChuckNorrisJokes\JokeFactory;

class ChuckNorrisJokesServiceProvider extends ServiceProvider {

    public function boot() {
        
    }

    public function register() {
        $this->app->bind('chuck-norris', function() {
            return new JokeFactory();
        });
    }
}