<?php

namespace Freddymu\ChuckNorrisJokes\Tests;

use Freddymu\ChuckNorrisJokes\JokeFactory;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

class JokeFactoryTest extends TestCase
{
    /** @test */
    public function it_returns_a_random_joke()
    {
        // Create a mock and queue two responses.
        $mock = new MockHandler([
            new Response(200, [], '
            { "type": "success", "value": { "id": 588, "joke": "Chuck Norris knows Victoria\'s secret.", "categories": [] } }'),
        ]);

        $handlerStack = HandlerStack::create($mock);

        $client = new Client(['handler' => $handlerStack]);

        $jokes = new JokeFactory($client);

        $joke = $jokes->getRandomJoke();

        $this->assertSame('Chuck Norris knows Victoria\'s secret.', $joke);
    }
}
