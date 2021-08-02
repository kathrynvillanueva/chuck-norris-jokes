<?php

namespace Kathv\ChuckNorrisJokes\Tests;

use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use GuzzleHttp\Handler\MockHandler;
use Kathv\ChuckNorrisJokes\JokeFactory;

class JokeFactoryTest extends TestCase {

    /** @test */
    public function it_returns_a_random_joke () {
        $mock = new MockHandler([
            new Response(200, [], '{ "type": "success", "value": { "id": 435, "joke": "When you play Monopoly with Chuck Norris, you do not pass go, and you do not collect two hundred dollars. You will be lucky if you make it out alive.", "categories": [] } }')
        ]);
        
        $handlerStack = HandlerStack::create($mock);
        $client = new Client(['handler' => $handlerStack]);

        $jokes = new JokeFactory($client);

        $joke = $jokes->getRandomJoke();
        $this->assertSame('When you play Monopoly with Chuck Norris, you do not pass go, and you do not collect two hundred dollars. You will be lucky if you make it out alive.', $joke);
    }

    // /** @test */
    // public function it_returns_a_predefined_joke () {
    //     $sample = [
    //         'Joke 1 ',
    //         'Joke 2 ',
    //         'Joke 3 ',
    //     ]; 
    //     $jokes = new JokeFactory();

    //     $joke = $jokes->getRandomJoke();
    //     $this->assertContains($joke, $sample);
    // }
}