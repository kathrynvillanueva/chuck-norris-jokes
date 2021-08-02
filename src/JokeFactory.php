<?php

namespace Kathv\ChuckNorrisJokes;

class JokeFactory {
    protected $jokes = [
        'Joke 1 ',
        'Joke 2 ',
        'Joke 3 ',
    ];

    public function __construct(array $jokes = null) {
        if ($jokes) {
            $this->jokes = $jokes;
        }
    }

    public function getRandomJoke() {
       return $this->jokes[array_rand($this->jokes)];
    }
}