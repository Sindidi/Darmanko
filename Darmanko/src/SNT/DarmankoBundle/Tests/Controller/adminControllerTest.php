<?php

namespace SNT\DarmankoBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class adminControllerTest extends WebTestCase
{
    public function testLister()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/lister');
    }

}
