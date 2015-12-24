<?php

namespace Http\HttplugBundle\ClientFactory;

use GuzzleHttp\Client;
use Http\Adapter\Guzzle5\Client as Adapter;

/**
 * @author Tobias Nyholm <tobias.nyholm@gmail.com>
 */
class Guzzle5Factory
{
    /**
     * {@inheritdoc}
     */
    public function createClient(array $config = [])
    {
        if (!class_exists('Http\Adapter\Guzzle5\Client')) {
            throw new \LogicException('To use the Guzzle5 adapter you need to install the "php-http/guzzle5-adapter" package.');
        }

        $client = new Client($config);

        return new Adapter($client);
    }
}
