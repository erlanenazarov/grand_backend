<?php

namespace GrandChita\AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ScheduleControllerTest extends WebTestCase
{
    public function testSchedule()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/schedule');
    }

}
