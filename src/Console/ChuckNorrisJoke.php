<?php

namespace Kathv\ChuckNorrisJokes\Console;

use Illuminate\Console\Command;
use Kathv\ChuckNorrisJokes\Facades\ChuckNorris;

class ChuckNorrisJoke extends Command {

    protected $signature = 'chuck-norris';
    protected $description = 'Output a Chuck Norris joke.';

    public function handle() {
        $this->info(ChuckNorris::getRandomJoke());
    }
}
