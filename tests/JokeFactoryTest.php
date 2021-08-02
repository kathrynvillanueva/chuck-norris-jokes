<?php

namespace Kathv\ChuckNorrisJokes\Tests;

use Kathv\ChuckNorrisJokes\JokeFactory;
use PHPUnit\Framework\TestCase;

class JokeFactoryTest extends TestCase {

    /** @test */
    public function it_returns_a_random_joke () {
        $jokes = new JokeFactory([
            'Joke 1'
        ]);

        $joke = $jokes->getRandomJoke();
        $this->assertSame('Joke 1', $joke);
    }

    /** @test */
    public function it_returns_a_predefined_joke () {
        $sample = [
            'Joke 1 ',
            'Joke 2 ',
            'Joke 3 ',
        ]; 
        $jokes = new JokeFactory();

        $joke = $jokes->getRandomJoke();
        $this->assertContains($joke, $sample);
    }
}